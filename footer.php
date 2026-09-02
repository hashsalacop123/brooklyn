
<!-- =========================================================
     FOOTER
========================================================= -->
<footer class="site-footer">

    <div class="container">

        <div class="row g-5">

            <!-- Brand -->
            <div class="col-lg-4">

                <a
                    href="#"
                    class="footer-brand d-flex align-items-center gap-2"
                >
                    <span class="brand-icon">
                        <i class="bi bi-intersect"></i>
                    </span>
                    BROOKLYN
                </a>

                <p>
                    We help businesses grow with data-driven digital
                    marketing strategies that deliver measurable results.
                </p>

                <div class="social-links">

                    <a href="#" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                </div>

            </div>


            <!-- Quick Links -->
            <div class="col-6 col-lg-2">

                <h4>Quick Links</h4>

                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#case-studies">Case Studies</a></li>
                    <li><a href="#contact">About Us</a></li>
                </ul>

            </div>


            <!-- Company -->
            <div class="col-6 col-lg-2">

                <h4>Company</h4>

                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>

            </div>


            <!-- Contact -->
            <div class="col-lg-4">

                <h4>Contact Us</h4>

                <ul class="contact-details">

                    <li>
                        <i class="bi bi-envelope"></i>
                        hello@brandly.com
                    </li>

                    <li>
                        <i class="bi bi-telephone"></i>
                        +1 (123) 456-7890
                    </li>

                    <li>
                        <i class="bi bi-geo-alt"></i>
                        123 Marketing St, New York, NY 10001
                    </li>

                </ul>

            </div>

        </div>


        <div class="footer-bottom">
            <p>
                © 2026 Brooklyn. All rights reserved.
            </p>
        </div>

    </div>

</footer>


<!-- Bootstrap JS -->

<!-- Custom JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("leadForm");
    const submitButton = document.getElementById("submitButton");
    const submitSpinner = document.getElementById("submitSpinner");
    const buttonText = submitButton.querySelector(".button-text");
    const formStatus = document.getElementById("formStatus");

    form.addEventListener("submit", async function (event) {

        event.preventDefault();

        /*
         * Bootstrap client-side validation.
         */
        if (!form.checkValidity()) {
            event.stopPropagation();
            form.classList.add("was-validated");
            return;
        }

        /*
         * Display loading state.
         */
        submitButton.disabled = true;
        submitSpinner.classList.remove("d-none");
        buttonText.textContent = "Submitting...";
        formStatus.className = "form-status";
        formStatus.textContent = "";

        /*
         * Convert form fields into JSON.
         */
        const formData = new FormData(form);

        const payload = Object.fromEntries(formData.entries());

        try {

            /*
             * Send lead to API.
             *
             * Replace /api/leads with your real API endpoint.
             */
            const response = await fetch("/api/leads", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(payload)
            });

            const result = await response.json();

            /*
             * Handle unsuccessful API response.
             */
            if (!response.ok) {
                throw new Error(
                    result.message || "Unable to submit the form."
                );
            }

            /*
             * Success state.
             */
            formStatus.className = "form-status success";
            formStatus.textContent =
                result.message ||
                "Thank you! Your message has been sent successfully.";

            form.reset();
            form.classList.remove("was-validated");

        } catch (error) {

            /*
             * Error state.
             */
            formStatus.className = "form-status error";
            formStatus.textContent =
                error.message ||
                "Something went wrong. Please try again later.";

        } finally {

            /*
             * Restore button state.
             */
            submitButton.disabled = false;
            submitSpinner.classList.add("d-none");
            buttonText.textContent = "Send Message";
        }

    });

});
</script>

</body>
</html>