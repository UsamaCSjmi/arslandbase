<?php require_once('./assets/header.php')?>
<div style="margin-top:65px" class="container col">
    <div class="container col pad-prop" style="margin:60px 0">
        <h2 class="big-heading mbt-50 font-heading">Frequently Asked Questions</h2>
        <div class="tnc" style="border-top: 1px solid #00000040;padding-top: 45px; width:100%">
            <h2><strong>FAQ's</strong></h2>
            <style>

                .faq-container {
                    /* max-width: 600px; */
                    margin: 0 auto;
                }

                .faq-group {
                    border: 1px solid #ddd;
                    margin-bottom: 10px;
                }

                .faq-question {
                    cursor: pointer;
                    padding: 10px;
                    border-bottom: 1px solid #ddd;
                    text-align: left;
                    background: none;
                    position: relative;
                }

                .faq-question::after {
                    content: '▼'; /* Down arrow */
                    position: absolute;
                    top: 50%;
                    right: 10px;
                    transform: translateY(-50%);
                    transition: transform 0.3s;
                }

                .faq-answer {
                    display: none;
                    padding: 10px;
                    border-bottom: 1px solid #ddd;
                }

                .faq-question.active::after {
                    content: '▲'; /* Up arrow when active */
                    transform: translateY(-50%) rotate(180deg);
                }
            </style>

            <div class="faq-container">
                <div class="faq-group">
                    <div class="faq-question" onclick="toggleFAQ('faq1')">How do I get started?</div>
                    <div class="faq-answer" id="faq1">Start by reading our documentation and following the step-by-step guide.</div>
                </div>

                <div class="faq-group">
                    <div class="faq-question" onclick="toggleFAQ('faq2')">Can I change my password?</div>
                    <div class="faq-answer" id="faq2">Yes, you can change your password in the account settings section.</div>
                </div>

                <div class="faq-group">
                    <div class="faq-question" onclick="toggleFAQ('faq3')">What payment methods do you accept?</div>
                    <div class="faq-answer" id="faq3">We accept credit cards, PayPal, and other common payment methods. Check our payment options for more details.</div>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    function toggleFAQ(faqId) {
        var faqAnswer = document.getElementById(faqId);
        var faqQuestion = document.querySelector("#" + faqId + ".faq-question");

        if (faqAnswer.style.display === 'none') {
            faqAnswer.style.display = 'block';
            faqQuestion.classList.add('active');
        } else {
            faqAnswer.style.display = 'none';
            faqQuestion.classList.remove('active');
        }
    }
</script>

<?php require_once('./assets/footer.php')?>