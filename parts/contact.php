<div class="row">
    <div class="s-wrap">
        <div id="Contact%20Me" class="w-80 m-auto">
            <div class="page-header">
                <h2 class="heading">
                    <span class="num"> 05 </span> Contact Me
                </h2>
            </div>
            <div id="popUp" class="popUp popup_hide">
                <div class="popUp-content flex column al-c js-c">
                    <div class="flex column">
                        <div>
                            <h3 class="response">Thank you for your email, we will look into this and get back to you sooner.</h3>
                        </div>
                        <div class="button close m-auto">
                            <a href="">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-container container flex jc-c">
                <form action="mail.php" method="post" class="submited_form">
                    <fieldset class="flex column w-80 m-auto">
                        <div class="flex jc-sb res-flex-col">
                            <div class="flex column w-45">
                                <input type="text" name="full-name" placeholder="Full Name">
                            </div>
                            <div class="w-45 flex column has-err">
                                <input type="email" name="email" placeholder="Email" class="err-msg">
                            </div>
                        </div>
                        <div class="flex column has-err">
                            <textarea name="message" id="message" cols="10" rows="5" placeholder="Your text" class="err-msg"></textarea>
                        </div>
                        <input type="submit" name="send" id="send" value="Send" class="button m-auto" id="Btn">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>