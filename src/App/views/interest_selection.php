<?php include $this->resolve('partials/_header.php') ?>

<head>
    <link rel="stylesheet" href="/assets/styles/User/interest_selection.css">
</head>
<section class="interest-selection">

    <h2 class="selection-title">
        Pick Your interest
    </h2>
    <div class="selection-container">
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Physics</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Combined Mathamatics</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Chemistry</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>ICT</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Science</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Econ</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Geography</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Computer Science</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Cyber Security</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Econ</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Geography</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Computer Science</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Cyber Security</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Econ</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Geography</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Computer Science</p>
        </div>
        <div class="choose-option" onclick="chooseOption(this)">
            <p>Cyber Security</p>
        </div>
    </div>
    <div class="selection-links">
        <a href="/interest/skip" class="skip">Skip</a>
        <a href="/interest/continue" class="continue">Continue</a>
    </div>


    <script>
        function chooseOption(element) {
            // Check if the clicked element already has the "choosen-option" class
            if (element.classList.contains("choosen-option")) {
                // If it has, remove the class
                element.classList.remove("choosen-option");
            } else {
                element.classList.add("choosen-option");
            }
        }
    </script>
</section>

<?php include $this->resolve('partials/_footer.php') ?>