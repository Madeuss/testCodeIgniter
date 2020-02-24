<style>
    #logsection{
        min-height: 100vh; 
        width: 100%;
        background-size:100% 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-image: url("public/img/portfolio/back_login.jpg");
    }
    #logbox{
        width: 80%;
        margin: 10vh auto;
    }
    .two-colors{
        font-size: 40px;
        background: linear-gradient(to right, #ab5981 49%, #3e2e48 10%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-left: 5px;

        font-weight: 700;
        font-family: Arial;
    }
</style>

<section id="logsection" class="light-bg">
        <div id="logbox" class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading two-colors">Login</h2>
                    <br>
                    <form id="login-form" action="post" method="">
                        <div class="row">
                            <div class="col-lg-offset-3 col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <input type="text" placeholder="Usuário" name="username" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--password row-->
                        <div class="row">
                            <div class="col-lg-offset-3 col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </div>
                                        <input type="password" placeholder="Senha" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-xl" id="btn-login" style="background-color: #ab5981;">Entrar</button>
                                </div>
                                <span class="alert-danger" role="alert"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>