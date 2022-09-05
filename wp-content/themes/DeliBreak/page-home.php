<?php get_header() ?>

<section id="topo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8" id="first-column">
                <div class="option">
                    <h3 class="animate__animated animate__bounce">Place your order now</h3>
                    <!--  -->
                    <div class="sabores">
                        <label class="free">Free shipping on purchases <br>
                            of $15 or more</label>
                        <div>
                            <select name="flavors">
                                <optgroup>
                                    <option value="shake">Shake</option>
                                    <option value="shake">Shake</option>
                                </optgroup>
                            </select>
                            <select name="flavors">
                                <optgroup>
                                    <option value="extra toppings">Extra toppings</option>
                                    <option value="extra toppings">Extra toppings</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <button type="button" class="btn-next">Next</button>
                    <p class="promotions">Know our promotions <br> Pastry courses</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>
            <div class="col-md-4" id="second-column">
                <div class="request">
                    <p class="text-topo"><strong>your drink with a deli dessert:</strong></p>
                    <div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/segunda-imagem.png" alt="Imagem primeira sobremesa">
                    </div>
                    <div class="lab-inp">
                        <label for="qtde">Add to my order</label>
                        <input class="right" type="number" min="1" name="qtde" id="qtde">
                    </div>
                </div>
                <div class="request">
                    <p><strong>your drink with a deli dessert:</strong></p>
                    <div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/terceira-imagem.png" alt="Imagem segunda sobremesa">
                    </div>
                    <div class="lab-inp">
                        <label for="qtde">Add to my order</label>
                        <input class="right" type="number" min="1" name="qtde" id="qtde">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="star">
    <div class="container" id="back">
        <div class="row">
            <div class="col-md-6">
                <div class="conteudos">
                    <h3 class="animate__animated animate__bounceIn">Sign up for the <br> Star Program</h3>
                    <p class="favorite">Enjoy your favorite your <br> favorite drinks.</p>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                    <div class="botoes">
                        <button type="button" class="btn-star">Join</button>

                        <button type="button" class="btn-star">Login</button>
                    </div>

                    <div class="last-text">
                        <p class="birthday">Your birthday drink <br> Exclusive offers <br> Select customer card</p>
                        <p class="informativo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/quarta-imagem.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="free-drink">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="todo-conteudo">
                    <h3 class="animate__animated animate__fadeInDownBig">Free birthday drink</h3>
                    <p><strong>How does it work?</strong></p>
                    <p class="sign">Sign up for the Star Program:</p>
                    <form>
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Date of your birthday">
                        </div>
                    </form>
                    <button type="submit" class="btn-sign">Sign up</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cardp">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/sexta-imagem.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="div-fundo">
                    <h3 class="animate__animated animate__fadeInBottomRight"><strong>Deli//</strong>Break</h3>
                    <p class="dessert animate__animated animate__fadeInBottomRight"><strong>Dessert menu</strong></p>
                    <!--  -->
                    <div class="text-precos">
                        <div>
                            <p class="title">Double chocolate cake</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="preco">
                            <p class="price">$ 8 </p>
                        </div>

                    </div>

                    <div class="text-precos">
                        <div>
                            <p class="title">Cookies with sprinkles</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="preco">
                            <p class="price">$ 12.5</p>
                        </div>

                    </div>

                    <div class="text-precos">
                        <div>
                            <p class="title">cake with orange</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="preco">
                            <p class="price">$ 12</p>
                        </div>

                    </div>

                    <div class="text-precos">
                        <div>
                            <p class="title">Brownie with ice cream</p>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="preco">
                            <p class="price">$ 9</p>
                        </div>

                    </div>
                    <!--  -->
                    <p class="shakes animate__animated animate__fadeInBottomLeft"><strong>Shakes & beverage menu </strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="branches">
    <div class="container">
        <div class="textos animate__animated animate__lightSpeedInLeft">
            <p class="famous">Do you already know our famous orange <br> mille-feuille cake?</p>
            <p><strong>visit us at any of our branches:</strong></p>
            <button type="submit" class="btn-find">Find a branche</button>
        </div>
    </div>
</section>

<section id="specials">
    <div class="container" id="title-special">
        <div class="row">
            <div class="col-md-12">
                <h3>Meet the special</h3>
            </div>
        </div>
    </div>

    <div class="container animate__animated animate__zoomIn" id="back-special">
        <div class="row">
            <!--  -->
            <div class="col-md-6">
                <div class="opcoes">
                    <button type="button" class="btn-buy">Buy Now</button>
                    <p class="ever"><strong>Everyone's favorite shake!</strong></p>
                    <p class="choco">Chocolate milk shake</p>
                    <p class="descritivo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore fugiat corrupti accusamus earum, a quae pariatur iste officia praesentium ab assumenda illum, magnam dicta amet incidunt tenetur voluptatem nam quia.</p>
                    <ul>
                        <li><strong>+ Extra cookies</strong></li>
                        <li><strong>+ Extra cream</strong></li>
                        <li><strong>+ Chocolate bars</strong></li>
                    </ul>
                    <div class="lab-inp">
                        <button type="button" class="btn-down">Buy Now</button>
                        <input class="right" type="number" min="1" name="qtde" id="qtde">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="request">
                    <p class="text-topo"><strong>your drink with a deli dessert:</strong></p>
                    <div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/segunda-imagem.png" alt="Imagem primeira sobremesa">
                    </div>
                    <div class="lab-inp-right">
                        <label for="qtde">Add to my order</label>
                        <input class="right" type="number" min="1" name="qtde" id="qtde">
                    </div>
                </div>
                <div class="request">
                    <!-- <p><strong>your drink with a deli dessert:</strong></p> -->
                    <div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/terceira-imagem.png" alt="Imagem segunda sobremesa">
                    </div>
                    <div class="lab-inp-right">
                        <label for="qtde">Add to my order</label>
                        <input class="right" type="number" min="1" name="qtde" id="qtde">
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</section>

<section id="benefits">
    <div class="container">
        <div class="all animate__animated animate__zoomInUp">
            <h3><strong>Deli//</strong>Break</h3>
            <p class="enjoy">Enjoy the benefits of the star program</p>
            <button type="button" class="sign">Sign up now</button>
            <p class="lorem">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolorem saepe aspernatur. Architecto quasi reiciendis earum commodi tempora excepturi ut voluptate? Consequuntur rem molestias, libero doloribus unde eveniet et quisquam!</p>
        </div>
    </div>
</section>

<section id="courses">
    <div class="container">
        <div class="row">
            <div class="col-md-6 animate__animated animate__fadeInLeft" id="back">
                <div class="conteudos">
                    <h3>Pastry and milkshake courses</h3>
                    <p class="group">Groups of 10 people. Saturdays from 9 to 11 a.m.</p>
                    <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <button type="button" class="btn-course">Reserve your place</button>
                    <div class="second-row">
                        <p class="preco">$15 per class or $60 for the entire course. Includes materials</p>
                        <a href="#">
                            <p class="information">More information here or call 432 5778</p>
                        </a>
                    </div>
                    <p class="lorem-down">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>

                </div>
            </div>
            <div class="col-md-6 animate__animated animate__fadeInRight">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/onze-imagem.png" alt="">
            </div>
        </div>
    </div>
</section>



<?php get_footer() ?>