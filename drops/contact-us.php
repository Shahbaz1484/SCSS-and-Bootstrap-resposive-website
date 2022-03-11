<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <!-- Head Files -->
    <?php  readfile( getcwd() . "/head.php"); ?>
</head>
<body class="position-relative better-senitize-page contact-page">

<?php  readfile( getcwd() . "/header.php"); ?>

<section class="better-senitize introduction-app contact-banner pb-0 position-relative" id="contact-banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-9 col-12 text-center text-md-right m-auto">
                <img src="assets/images/contact-us.png" alt="" class="img-fluid">
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                <h2>Get in touch</h2>
                <form method="post" name="contact-form" id="contact-form" class="contact-form" action="#">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 pr-md-0">
                            <label for="username">name</label>
                            <input type="text" class="form-control mr-auto" id="username" placeholder="Enter email" name="username" value="Kristyle Wings">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 pl-md-0">
                            <label for="company">company</label>
                            <input type="password" class="form-control ml-auto" name="company" id="company">
                        </div>
                    </div>

                    <label for="enquiry">enquiry type</label>
                    <div class="dropdown" id="enquiry">
                        <button type="button" class="selectbox-btn w-100 text-left position-relative" data-toggle="dropdown">
                            Please select a department
                        </button>
                        <div class="dropdown-menu w-100">
                            <a class="dropdown-item">Link 1</a>
                            <a class="dropdown-item">Link 2</a>
                            <a class="dropdown-item">Link 3</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 pr-md-0">
                            <label for="email">email address</label>
                            <input type="email" class="form-control mr-auto" id="email" name="email">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 pl-md-0">
                            <label for="tel">telephone</label>
                            <input type="tel" class="form-control ml-auto" name="tel" id="tel">
                        </div>
                    </div>

                    <label for="comments">comments</label>
                    <textarea class="form-control" name="comments" id="comments" cols="30" rows="10"></textarea>

                    <div class="btn-container btn-container1">
                        <div class="ml-auto">
                            <button type="submit" name="submit" class="btn btn2 w-100">submit enquiry</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="learn-more contact-info" id="contact-info">
    <div class="container text-center">
        <div class="d-flex flex-wrap align-items-center text-left contact-info-wrapper mr-auto ml-auto">
            <div>
                <ul>
                    <li>
                        <a href="tel:02034802321"><span class="d-block">Call Us</span> 0203 480 2321</a>
                    </li>
                    <li>
                        <a href="mailto:web@dropstations.com"><span class="d-block">Email Us</span> web@dropstations.com</a>
                    </li>
                </ul>
            </div>

            <div>
                <ul>
                    <li><span>Visit Us (Appointment only)</span></li>
                    <li> 8 Stafford Street Mayfair, London W1S 4RU United Kingdom </li>
                </ul>
            </div>
        </div>
        <p>learn more about drops, our machines, and our app</p>
        <div class="btn-container btn-container1 d-block d-md-flex align-items-center justify-content-center">
            <div><a href="#" class="btn btn3">our sanitiser stations</a></div>
            <div><a href="#" class="btn btn4">our mobile app</a></div>
        </div>
    </div> 
</section>

<?php  readfile( getcwd() . "/footer.php"); ?>

<!-- Foot Files -->   
<?php  readfile( getcwd() . "/foot.php"); ?>
</body>
</html>