<?php

/* login/login.html.twig */
class __TwigTemplate_22f7fce3fe5001247db1178b1ea53d4d24e98a199517ab778fe1359710d56452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Focus Academy: Login</title>

    <!-- Bootstrap Core CSS -->
    <link href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog-home.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">
            <!-- Blog Sidebar Widgets Column -->
            <div class=\"col-md-4 col-lg-offset-4\">
                <!-- Side Widget Well -->
                <div class=\"well\">
                    <h4 align=\"center\">Admin Login</h4>
                    <form name=\"login_form\" method=\"POST\" action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\">
                        ";
        // line 40
        if (($context["errors"] ?? null)) {
            // line 41
            echo "                            <div class=\"alert alert-danger\" role=\"alert\">
                                ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["errors"] ?? null), "messageKey", array()), $this->getAttribute(($context["errors"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 45
        echo "                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Username</label>
                            <input type=\"text\" name=\"_username\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\">Password</label>
                            <input type=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>

                        <input type=\"submit\" name=\"submit\" value=\"Log In\" class=\"btn btn-primary\">
                    </form>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p style=\"text-align:center\">Copyright &copy; www.focus_academy.com 2017</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 83,  120 => 80,  84 => 47,  80 => 45,  74 => 42,  71 => 41,  69 => 40,  65 => 39,  41 => 18,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/login.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\computer_aided_learning\\app\\Resources\\views\\login\\login.html.twig");
    }
}
