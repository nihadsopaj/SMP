<aside id="sidebar">
            <?php
                if(isset($_POST['login'])){
                    login($_POST['email'],$_POST['fjalekalimi']);
                }
                if(!isset($_SESSION['anetari'])){
            ?>
            <form id="login" class="box" action="" method="post">
                <legend>Forma për hyrje</legend>
                <fieldset>
                    <label>Email: </label>
                    <input type="email" id="email" name="email">
                </fieldset>
                <fieldset>
                    <label>Fjalekalimi: </label>
                    <input type="password" id="fjalekalimi" name="fjalekalimi">
                </fieldset>
                <input type="submit" name="login" id="login" value="Kycu">
            </form>
            <?php } ?>
            <section class="box">
                <h3 class="title">SMP ka këto funksionalitete:</h3>
                <ol>
                    <li>Menaxhimin e anetareve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Menaxhimin e projekteve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Menaxhimin e puneve(Shtimin| Fshirjen | Modifikimin)</li>
                    <li>Hyrjen dhe Daljen nga sistemi</li>
                    <li>Menaxhime te tjera</li>
                </ol>
                <hr>
                <h3 class="title">Trajnimi Web Development ofron:</h3>
                <ul>
                    <li>HTML & CSS</li>
                    <li>JavaScript & jQuery</li>
                    <li>PHP & MySQL</li>
                    <li>Kodimi i projektit real SMP</li>
                    <li>Kodimi i projektit real Rent a Car</li>
                    <li>Detajet e trajnimit -
                        <a href="https://probitacademy.com/courses/web-development-full-stack/">Probit Academy</a>
                    </li>

                </ul>
            </section>

        </aside>