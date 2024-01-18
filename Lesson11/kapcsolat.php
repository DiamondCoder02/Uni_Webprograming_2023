<?php
$bigHeader = true;
include 'pages/begin.php';
?>

<h1>Elérhetőségeink</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis, reiciendis molestias voluptas
    accusamus, similique, cum fugit voluptatibus amet veritatis delectus dicta sed vero eligendi.</p>

<div class="contact">

    <section class="info">
        <h2>Company Kft.</h2>
        <p>1234 Város neve, Utca neve 1/A.<br>
            <span>E-mail:</span> company@mailbox.com <br>
            <span>Telefon:</span> +36 30 123 45 67 <br>
            <span>Ügyvezető:</span> Főnök Ferdinánd
        </p>
    </section>

    <section class="social">
        <h3>Közösségi média</h3>
        <ul>
            <li><a href="https://facebook.com" target="_blank">Facebook oldalunk</a></li>
            <li><a href="https://youtube.com" target="_blank">YouTube csatornánk</a></li>
            <li><a href="https://instagram.com" target="_blank">Instagram profilunk</a></li>
            <li><a href="https://twitter.com" target="_blank">Twitter fiókunk</a></li>
        </ul>
    </section>

</div>

<section>
    <h2>Vendégkönyv</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste autem dolorum, ipsam fugiat blanditiis sed odit
        odio. <br><a href="#input" class="new">Én is hozzászólok</a></p>

    <ul class="customerbook">
        <?php
        $items = file('content/customerbook.txt');

        for ($i = count($items) - 1; $i >= 0; $i--) {
            $data = explode(';', trim($items[$i]));
            $name = $data[0];
            $rating = $data[2];
            $message = $data[3];
            $public = $data[4];

            $ratingText = [ 'Borzalmas', 'Egynek oké', 'Rendben van', 'Tetszik', 'Kiváló'];
            $rating = $ratingText[$rating - 1];

            if ($public) {
                echo '<li>
                    <div class="top">
                        <span class="name">' . $name . '</span>
                        <span class="rating">\'' . $rating . '\' értékelés</span>
                    </div>
                    <p class="content">' . $message . '</p>
                </li>';
            }
        }
        ?>
    </ul>

    <?php
    var_dump($_POST);
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rating = $_POST['rating'];
        $message = $_POST['message'];

        /*
        if ($name && $email) {
            echo "<p class='message success'><strong>Üzenet sikeresen elküldve</strong> Köszönjük a hozzászólást!</p>";
        } else {
            echo "<p class='message error'><strong>Hiányos adatok</strong> Kérjük, töltsd ki az összes mezőt!</p>";
        }
        */

        if (empty($name) || empty($email) || empty($rating) || empty($message)) {
            echo "<p class='message error'><strong>Hiányos adatok</strong> Kérjük, töltsd ki az összes mezőt!</p>";
        } else {
            $file = fopen('content/customerbook.txt', 'a');
            $line = $name . ';' . $email . ';' . $rating . ';' . $message . ";0";
            fwrite($file, $line . PHP_EOL);
            fclose($file);

            echo "<p class='message success'><strong>Üzenet sikeresen elküldve</strong> Köszönjük a hozzászólást!</p>";
        }
    }
    ?>

    <a name="input"></a>
    <form action="" method='post'>

        <div>
            <label for="name">Mi a neved?</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="email">E-mail címed</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="rating">Milyen értékelést adsz?</label>
            <select id="rating" name="rating">
                <option value="5">Kiváló</option>
                <option value="4">Tetszik</option>
                <option value="3">Rendben van</option>
                <option value="2">Egynek oké</option>
                <option value="1">Borzalmas</option>
            </select>
        </div>

        <div>
            <label for="message">Üzeneted szövege</label>
            <textarea id="message" name="message"></textarea>
        </div>

        <button>Elküldöm</button>

    </form>
</section>

<?php include 'pages/end.php'; ?>