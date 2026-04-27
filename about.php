<?php
session_start(); // THIS MUST BE AT THE TOP
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="style.css">



</head>

<body>
     <header>
        <div class="logo">
            <img
                src="logo.jpg"
                alt="Logo" />
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_email'])): ?>
                <a href="omsim.php">Reserve Now</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
        
    </header>
    <h1>SIKATAN SIKADA CAFE</h1>

    <div class="gallery">

        <!-- Each image wrapped in <a> for zoom -->
        <a href="#img1"><img src="485770515_661962009555958_5789099827635646974_n.jpg"></a>
        <a href="#img2"><img src="486370049_663743619377797_8985558693771694590_n.jpg"></a>
        <a href="#img3"><img src="486682140_665269242558568_4692220452425018661_n.jpg"></a>
        <a href="#img4"><img src="487081479_666858719066287_8888901620171404422_n.jpg"></a>
        <a href="#img5"><img src="487122743_666858109066348_4740749033329536719_n.jpg"></a>
        <a href="#img6"><img src="488908908_673226655096160_2888243140587080020_n.jpg"></a>
        <a href="#img7"><img src="492401122_686259060459586_7320322088300253204_n.jpg"></a>
        <a href="#img8"><img src="495575078_694957522923073_8739164693219140089_n.jpg"></a>
        <a href="#img9"><img src="499973432_708502988235193_1942949682038359354_n.jpg"></a>
        <a href="#img10"><img src="499973432_708502988235193_1942949682038359354_n.jpg"></a>

        <a href="#img11"><img src="523245155_750474950704663_7902873028081961214_n.jpg"></a>
        <a href="#img12"><img src="524864872_753812417037583_8908862661265440711_n.jpg"></a>
        <a href="#img13"><img src="528039996_761770209575137_5851312514542695574_n.jpg"></a>
        <a href="#img14"><img src="530332863_765660059186152_1447430163911001734_n.jpg"></a>
        <a href="#img15"><img src="530952577_766788539073304_1214758020810021280_n.jpg"></a>
        <a href="#img16"><img src="548271350_798920915860066_2386867329047156624_n.jpg"></a>
        <a href="#img17"><img src="550365767_798920842526740_2022681865587568294_n.jpg"></a>
        <a href="#img18"><img src="550789305_798920199193471_3981125479931525447_n.jpg"></a>
        <a href="#img19"><img src="557609286_811852001233624_4148208188586866887_n.jpg"></a>
        <a href="#img20"><img src="559284483_811890287896462_8662894838771274474_n.jpg"></a>

        <a href="#img21"><img src="576995494_840019295083561_7249256197323786157_n.jpg"></a>
        <a href="#img22"><img src="648092724_928052026280287_9039261179305360402_n.jpg"></a>
        <a href="#img23"><img src="658401055_948332334252256_4605010488572471262_n.jpg"></a>
        <a href="#img24"><img src="659149536_948332447585578_3078040103009539337_n.jpg"></a>
        <a href="#img25"><img src="659337329_951439343941555_5986993839082980433_n.jpg"></a>
        <a href="#img26"><img src="670838582_958206353264854_1795018478152690162_n.jpg"></a>
        <a href="#img27"><img src="677294624_964471339305022_5514841431932579303_n.jpg"></a>
        <a href="#img28"><img src="678777804_964471365971686_7038739570999484062_n.jpg"></a>
        <a href="#img29"><img src="681184966_967727325646090_2833292680695379140_n.jpg"></a>
        <a href="#img30"><img src="last.jpg"></a>

    </div>
    <div id="img1" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="485770515_661962009555958_5789099827635646974_n.jpg">
        </a>
    </div>
    <div id="img2" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="486370049_663743619377797_8985558693771694590_n.jpg">
        </a>
    </div>
    <div id="img3" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="486682140_665269242558568_4692220452425018661_n.jpg">
        </a>
    </div>
    <div id="img4" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="487081479_666858719066287_8888901620171404422_n.jpg">
        </a>
    </div>
    <div id="img5" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="487122743_666858109066348_4740749033329536719_n.jpg">
        </a>
    </div>
    <div id="img6" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="488908908_673226655096160_2888243140587080020_n.jpg">
        </a>
    </div>
    <div id="img7" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="492401122_686259060459586_7320322088300253204_n.jpg">
        </a>
    </div>
    <div id="img8" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="495575078_694957522923073_8739164693219140089_n.jpg">
        </a>
    </div>
    <div id="img9" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="499973432_708502988235193_1942949682038359354_n.jpg">
        </a>
    </div>
    <div id="img10" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="499973432_708502988235193_1942949682038359354_n.jpg">
        </a>
    </div>
    <div id="img11" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="523245155_750474950704663_7902873028081961214_n.jpg">
        </a>
    </div>
    <div id="img12" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="524864872_753812417037583_8908862661265440711_n.jpg">
        </a>
    </div>
    <div id="img13" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="528039996_761770209575137_5851312514542695574_n.jpg">
        </a>
    </div>
    <div id="img14" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="530332863_765660059186152_1447430163911001734_n.jpg">
        </a>
    </div>
    <div id="img15" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="530952577_766788539073304_1214758020810021280_n.jpg">
        </a>
    </div>
    <div id="img16" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="548271350_798920915860066_2386867329047156624_n.jpg">
        </a>
    </div>
    <div id="img17" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="550365767_798920842526740_2022681865587568294_n.jpg">
        </a>
    </div>
    <div id="img18" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="550789305_798920199193471_3981125479931525447_n.jpg">
        </a>
    </div>
    <div id="img19" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="557609286_811852001233624_4148208188586866887_n.jpg">
        </a>
    </div>
    <div id="img20" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="559284483_811890287896462_8662894838771274474_n.jpg">
        </a>
    </div>
    <div id="img21" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="576995494_840019295083561_7249256197323786157_n.jpg">
        </a>
    </div>
    <div id="img22" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="648092724_928052026280287_9039261179305360402_n.jpg">
        </a>
    </div>
    <div id="img23" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="658401055_948332334252256_4605010488572471262_n.jpg">
        </a>
    </div>
    <div id="img24" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="659149536_948332447585578_3078040103009539337_n.jpg">
        </a>
    </div>
    <div id="img25" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="659337329_951439343941555_5986993839082980433_n.jpg">
        </a>
    </div>
    <div id="img26" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="670838582_958206353264854_1795018478152690162_n.jpg">
        </a>
    </div>
    <div id="img27" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="677294624_964471339305022_5514841431932579303_n.jpg">
        </a>
    </div>
    <div id="img28" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="678777804_964471365971686_7038739570999484062_n.jpg">
        </a>
    </div>
    <div id="img29" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="681184966_967727325646090_2833292680695379140_n.jpg">
        </a>
    </div>
    <div id="img30" class="lightbox">
        <a href="#" class="close"></a>
        <a href="#">
            <img src="last.jpg">
        </a>
    </div>
</body>

</html>