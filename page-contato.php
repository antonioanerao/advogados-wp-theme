<?php /* Template Name: Contato */ get_header(); ?>

<?php
$coop_options=theme_setup_data();
$contact_setting = wp_parse_args(  get_option( 'coop_options', array() ), $coop_options );
?>
<script>
    jQuery(function($){
        $("#telefone").mask("(99) 9999?9-9999");
        $("#telefone").on("blur", function() {
            var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );
            if( last.length == 3 ) {
                var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
                var lastfour = move + last;
                var first = $(this).val().substr( 0, 9 );
                $(this).val( first + '-' + lastfour );
            }
        });
    });
</script>

<!-- PAGE TITLE SECTION-->
<section class="pageTitleSection paralax-bg" style="background-image: url(img/page-banner/page-banner-2.jpg);">
    <div class="container">
        <div class="pageTitleInfo text-center">
            <h2><?php echo $contact_setting['contact_titulo_title']; ?></h2>
            <ol class="breadcrumb">
                <li><a href="<?php get_option('home'); ?>/">Home</a></li>
                <li class="active"><?php echo $contact_setting['contact_titulo_title']; ?></li>
            </ol>
        </div>
    </div>
</section>


<!-- CONTACT SECTION -->
<section class="whiteSection commonSection clearfix">
    <div class="container">
        <div class="main-content">
            <div class="row contact-info">
                <div class="col-sm-4 text-center">
                    <div class="box">
                        <div class="box-inner border-all">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Endereço</h4>
                            <p><?php echo nl2br($contact_setting['contact_endereco_title']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <div class="box">
                        <div class="box-inner border-all">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Telefone</h4>
                            <p><?php echo nl2br($contact_setting['contact_telefone_title']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <div class="box">
                        <div class="box-inner border-all">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p><?php echo nl2br($contact_setting['contact_email_title']); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <div class="sectionTitle text-center">
                    <h2><?php echo $contact_setting['contact_titulo_title']; ?></h2>
                    <p><?php echo nl2br($contact_setting['contact_titulo_description']); ?></p>
                </div>
                <div class="panel formPanel">
                    <div class="panel-body">
                        <?php
                            if(isset($_POST['enviar']))
                            {
                                if(empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['telefone'])
                                    or empty($_POST['assunto']) or empty($_POST['mensagem']))
                                {
                                    danger("Preencha todos os campos");
                                }

                                else
                                {
                                    success("Sua mensagem foi enviada com sucesos. Retornaremos em breve");
                                }
                            }
                        ?>
                        <form action="<?php get_option('home'); ?>/contato" method="post" role="form">
                            <div class="form-group formField formField-left">
                                <input type="text" name="nome" class="form-control" placeholder="Nome Completo">
                            </div>
                            <div class="form-group formField formField-right">
                                <input type="text" name="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group formField formField-left">
                                <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                            </div>
                            <div class="form-group formField formField-right">
                                <input type="text" name="assunto" class="form-control" placeholder="Assunto">
                            </div>
                            <div class="form-group formField">
                                <textarea class="form-control" name="mensagem" placeholder="Escreva detalhadamente sua mensagem"></textarea>
                            </div>
                            <div class="form-group formField text-center">
                                <button type="submit" name="enviar" class="btn btn-secondary">Enviar Mensagem</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
