<?php 
$bigHeader = true;
include 'pages/begin.php'; 
?>
			
<h1>Elérhetőségeink</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis, reiciendis molestias voluptas accusamus, similique, cum fugit voluptatibus amet veritatis delectus dicta sed vero eligendi.</p>

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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste autem dolorum, ipsam fugiat blanditiis sed odit odio. <br><a href="#input" class="new">Én is hozzászólok</a></p>

    <ul class="customerbook">
        <li>
            <div class="top">
                <span class="name">Gipsz Jakab</span>
                <span class="rating">'Kiváló' értékelés</span>
            </div>
            <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quam harum distinctio provident hic nam, ut blanditiis! Commodi, dolore placeat tempora? Voluptatibus quos consectetur aliquid!</p>
        </li>
        <li>
            <div class="top">
                <span class="name">Másik Jakab</span>
                <span class="rating">'Tetszik' értékelés</span>
            </div>
            <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas sapiente incidunt harum, quae ex ab?</p>
        </li>
    </ul>

    <p class="message success"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit.</p>

    <p class="message error"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Itaque, iste veniam.</p>

    <a name="input"></a>
    <form action="">

        <div>
            <label for="name">Mi a neved?</label>
            <input type="text" id="name">
        </div>

        <div>
            <label for="email">E-mail címed</label>
            <input type="email" id="email">
        </div>

        <div>
            <label for="rating">Milyen értékelést adsz?</label>
            <select id="rating">
                <option value="5">Kiváló</option>
                <option value="4">Tetszik</option>
                <option value="3">Rendben van</option>
                <option value="2">Egynek oké</option>
                <option value="1">Borzalmas</option>
            </select>
        </div>

        <div>
            <label for="message">Üzeneted szövege</label>
            <textarea id="message"></textarea>
        </div>

        <button>Elküldöm</button>

    </form>
</section>
			
<?php include 'pages/end.php'; ?>