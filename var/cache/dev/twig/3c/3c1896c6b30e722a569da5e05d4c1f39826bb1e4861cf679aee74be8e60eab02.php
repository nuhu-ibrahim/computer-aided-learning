<?php

/* home.html.twig */
class __TwigTemplate_4cbe46a1b22c30ab5d8060eee020a7bbc01fa9b33bde8e1d1a62261e27dab428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad65eabf446c886714765ab0514bd9bb638183012d12394ef07804375e074a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad65eabf446c886714765ab0514bd9bb638183012d12394ef07804375e074a89->enter($__internal_ad65eabf446c886714765ab0514bd9bb638183012d12394ef07804375e074a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_a79a25c9295c8a42b6f99290f99f4ef01128550554b3c3377f22bc45958e548e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79a25c9295c8a42b6f99290f99f4ef01128550554b3c3377f22bc45958e548e->enter($__internal_a79a25c9295c8a42b6f99290f99f4ef01128550554b3c3377f22bc45958e548e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Focus Academy: Post</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog-home.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    
    <!-- Custom CSS -->
    <link href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\">
</head>
    
<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("home");
        echo "\">Focus Academy</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li role=\"presentation\" class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Post Categories <span class=\"caret\"></span>
                        </a>
                        ";
        // line 48
        if (($context["options"] ?? $this->getContext($context, "options"))) {
            // line 49
            echo "                            <ul class=\"dropdown-menu nav\">
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 51
                echo "                                    <li style=\"background-color: #E0E0E0\">
                                        <a href=\"";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("home");
                echo "?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "getCategoryId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "getCategoryTitle", array()), "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "   
                            </ul>
                        ";
        }
        // line 57
        echo "                    </li>
                    <li role=\"presentation\" class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getFirstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getSurname", array()), "html", null, true);
        echo "  <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu nav\">
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a> </li> 
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url(";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/home/1.jpg"), "html", null, true);
        echo ");\"></div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url(";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/home/5.jpg"), "html", null, true);
        echo ");\"></div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url(";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/home/2.jpg"), "html", null, true);
        echo ");\"></div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url(";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/home/6.jpg"), "html", null, true);
        echo ");\"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class=\"container\">
        ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p align=\"center\">Copyright &copy; www.focus_academy.com 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
";
        
        $__internal_ad65eabf446c886714765ab0514bd9bb638183012d12394ef07804375e074a89->leave($__internal_ad65eabf446c886714765ab0514bd9bb638183012d12394ef07804375e074a89_prof);

        
        $__internal_a79a25c9295c8a42b6f99290f99f4ef01128550554b3c3377f22bc45958e548e->leave($__internal_a79a25c9295c8a42b6f99290f99f4ef01128550554b3c3377f22bc45958e548e_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ce0484e666b014506ba2a3f581ae4bd88160f884936cd165026508ae09b85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ce0484e666b014506ba2a3f581ae4bd88160f884936cd165026508ae09b85d->enter($__internal_d9ce0484e666b014506ba2a3f581ae4bd88160f884936cd165026508ae09b85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea844bfcd8a7461cdbff296ceacd18755b346f6c7f76763a63a445c1adeb495c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea844bfcd8a7461cdbff296ceacd18755b346f6c7f76763a63a445c1adeb495c->enter($__internal_ea844bfcd8a7461cdbff296ceacd18755b346f6c7f76763a63a445c1adeb495c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "            
        ";
        
        $__internal_ea844bfcd8a7461cdbff296ceacd18755b346f6c7f76763a63a445c1adeb495c->leave($__internal_ea844bfcd8a7461cdbff296ceacd18755b346f6c7f76763a63a445c1adeb495c_prof);

        
        $__internal_d9ce0484e666b014506ba2a3f581ae4bd88160f884936cd165026508ae09b85d->leave($__internal_d9ce0484e666b014506ba2a3f581ae4bd88160f884936cd165026508ae09b85d_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 112,  242 => 111,  219 => 130,  213 => 127,  198 => 114,  196 => 111,  178 => 96,  172 => 93,  166 => 90,  160 => 87,  131 => 61,  124 => 59,  120 => 57,  115 => 54,  102 => 52,  99 => 51,  95 => 50,  92 => 49,  90 => 48,  78 => 39,  59 => 23,  54 => 21,  48 => 18,  42 => 15,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Focus Academy: Post</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{asset(\"css/bootstrap.min.css\")}}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href={{asset(\"css/blog-home.css\")}} rel=\"stylesheet\">
    
    <!-- Custom CSS -->
    <link href={{asset(\"css/modern-business.css\")}} rel=\"stylesheet\">

    <link href={{asset(\"font-awesome/css/font-awesome.min.css\")}} rel=\"stylesheet\" type=\"text/css\">
</head>
    
<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{url('home')}}\">Focus Academy</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li role=\"presentation\" class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Post Categories <span class=\"caret\"></span>
                        </a>
                        {% if options %}
                            <ul class=\"dropdown-menu nav\">
                                {% for option in options %}
                                    <li style=\"background-color: #E0E0E0\">
                                        <a href=\"{{url('home')}}?id={{option.getCategoryId}}\">{{option.getCategoryTitle}}</a>
                                    </li>
                                {% endfor %}   
                            </ul>
                        {% endif %}
                    </li>
                    <li role=\"presentation\" class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> {{user.getFirstname}} {{user.getSurname}}  <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu nav\">
                            <li><a href=\"{{ url(\"logout\") }}\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a> </li> 
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url({{asset(\"uploads/home/1.jpg\")}});\"></div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url({{asset(\"uploads/home/5.jpg\")}});\"></div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url({{asset(\"uploads/home/2.jpg\")}});\"></div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url({{asset(\"uploads/home/6.jpg\")}});\"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class=\"container\">
        {% block body %}
            
        {% endblock %}
        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p align=\"center\">Copyright &copy; www.focus_academy.com 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src={{asset(\"js/jquery.js\")}}></script>

    <!-- Bootstrap Core JavaScript -->
    <script src={{asset(\"js/bootstrap.min.js\")}}></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
", "home.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\home.html.twig");
    }
}
