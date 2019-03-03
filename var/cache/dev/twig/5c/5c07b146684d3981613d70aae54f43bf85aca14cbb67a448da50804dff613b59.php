<?php

/* admin.html.twig */
class __TwigTemplate_9622afa82eca1bb93677b8a65e063417fb5729b8f65971e616a06c7581d60b18 extends Twig_Template
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
        $__internal_7173e8c597bc3761c510c287bd31002219d81e0a8b35a449a6efa090cfb22f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7173e8c597bc3761c510c287bd31002219d81e0a8b35a449a6efa090cfb22f66->enter($__internal_7173e8c597bc3761c510c287bd31002219d81e0a8b35a449a6efa090cfb22f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_a3c808811ba59023a93fedb3b259e80bbf8a481e21ee4a1c0f4b8fea077f9dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c808811ba59023a93fedb3b259e80bbf8a481e21ee4a1c0f4b8fea077f9dc3->enter($__internal_a3c808811ba59023a93fedb3b259e80bbf8a481e21ee4a1c0f4b8fea077f9dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Focus Academy: Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\">Focus Academy Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getFirstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getSurname", array()), "html", null, true);
        echo "  <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    
                    <li class=\"active\">
                        <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_categories");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Categories</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_posts");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Posts</a>
                    </li>
                    ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 76
            echo "                         <li>
                            <a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_users");
            echo "\"><i class=\"fa fa-fw fa-user\"></i> Users</a>
                        </li>
                    ";
        }
        // line 80
        echo "                    <li>
                        <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("list_comments");
        echo "\"><i class=\"fa fa-fw fa-desktop\"></i>Comments</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_attachment");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Attachments</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "                
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src=";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <!-- Morris Charts JavaScript -->
    <script src=";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "></script>
    
    <script type=\"text/javascript\">
        function goto(param){
            result=confirm('Delete category?. Note that deleting a category will cause all assciated posts to be deleted.');
            if(result){
                window.location.href=param;
            }
        }
        function goto1(param){
            result=confirm('Delete post?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto2(param){
            result=confirm('Delete attachment?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto3(param){
            result=confirm('Delete user?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto4(param){
            result=confirm('Delete comment?.');
            if(result){
                window.location.href=param;
            }
        }
        function printDiv(divName){
            var printContents= document.getElementById(divName).innerHTML;
            var originalContents=document.body.innerHTML;
            document.body.innerHTML=printContents;
            window.print();
            document.body.innerHTML=originalContents;
        }
    </script>
</body>

</html>
";
        
        $__internal_7173e8c597bc3761c510c287bd31002219d81e0a8b35a449a6efa090cfb22f66->leave($__internal_7173e8c597bc3761c510c287bd31002219d81e0a8b35a449a6efa090cfb22f66_prof);

        
        $__internal_a3c808811ba59023a93fedb3b259e80bbf8a481e21ee4a1c0f4b8fea077f9dc3->leave($__internal_a3c808811ba59023a93fedb3b259e80bbf8a481e21ee4a1c0f4b8fea077f9dc3_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_b995a2686ff7d0eacc0a42ee2fb4c94ceb627cd452d66a7613d6c7f203e93a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b995a2686ff7d0eacc0a42ee2fb4c94ceb627cd452d66a7613d6c7f203e93a5a->enter($__internal_b995a2686ff7d0eacc0a42ee2fb4c94ceb627cd452d66a7613d6c7f203e93a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23223954fdd34ab18bcdb575ee73d899e6ab25c4714e9148dea91a8d9c78163c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23223954fdd34ab18bcdb575ee73d899e6ab25c4714e9148dea91a8d9c78163c->enter($__internal_23223954fdd34ab18bcdb575ee73d899e6ab25c4714e9148dea91a8d9c78163c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 97
        echo "                    
                ";
        
        $__internal_23223954fdd34ab18bcdb575ee73d899e6ab25c4714e9148dea91a8d9c78163c->leave($__internal_23223954fdd34ab18bcdb575ee73d899e6ab25c4714e9148dea91a8d9c78163c_prof);

        
        $__internal_b995a2686ff7d0eacc0a42ee2fb4c94ceb627cd452d66a7613d6c7f203e93a5a->leave($__internal_b995a2686ff7d0eacc0a42ee2fb4c94ceb627cd452d66a7613d6c7f203e93a5a_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 97,  260 => 96,  205 => 119,  201 => 118,  197 => 117,  191 => 114,  185 => 111,  171 => 99,  169 => 96,  154 => 84,  148 => 81,  145 => 80,  139 => 77,  136 => 76,  134 => 75,  129 => 73,  123 => 70,  117 => 67,  104 => 57,  96 => 54,  88 => 49,  60 => 24,  54 => 21,  48 => 18,  42 => 15,  26 => 1,);
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

    <title>Focus Academy: Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href={{asset(\"css/bootstrap.min.css\")}} rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href={{asset(\"css/sb-admin.css\")}} rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href={{asset(\"css/plugins/morris.css\")}} rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href={{asset(\"font-awesome/css/font-awesome.min.css\")}} rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{url('admin')}}\">Focus Academy Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> {{user.getFirstname}} {{user.getSurname}}  <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"{{ url(\"logout\") }}\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    
                    <li class=\"active\">
                        <a href=\"{{ url(\"admin\") }}\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=\"{{ url(\"add_categories\") }}\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Categories</a>
                    </li>
                    <li>
                        <a href=\"{{ url(\"add_posts\") }}\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Posts</a>
                    </li>
                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                         <li>
                            <a href=\"{{ url(\"add_users\") }}\"><i class=\"fa fa-fw fa-user\"></i> Users</a>
                        </li>
                    {% endif %}
                    <li>
                        <a href=\"{{ url(\"list_comments\") }}\"><i class=\"fa fa-fw fa-desktop\"></i>Comments</a>
                    </li>
                    <li>
                        <a href=\"{{ url(\"add_attachment\") }}\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Attachments</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                {% block body %}
                    
                {% endblock%}
                
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src={{asset(\"js/jquery.js\")}}></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src={{asset(\"js/bootstrap.min.js\")}}></script>

    <!-- Morris Charts JavaScript -->
    <script src={{asset(\"js/plugins/morris/raphael.min.js\")}}></script>
    <script src={{asset(\"js/plugins/morris/morris.min.js\")}}></script>
    <script src={{asset(\"js/plugins/morris/morris-data.js\")}}></script>
    
    <script type=\"text/javascript\">
        function goto(param){
            result=confirm('Delete category?. Note that deleting a category will cause all assciated posts to be deleted.');
            if(result){
                window.location.href=param;
            }
        }
        function goto1(param){
            result=confirm('Delete post?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto2(param){
            result=confirm('Delete attachment?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto3(param){
            result=confirm('Delete user?.');
            if(result){
                window.location.href=param;
            }
        }
        function goto4(param){
            result=confirm('Delete comment?.');
            if(result){
                window.location.href=param;
            }
        }
        function printDiv(divName){
            var printContents= document.getElementById(divName).innerHTML;
            var originalContents=document.body.innerHTML;
            document.body.innerHTML=printContents;
            window.print();
            document.body.innerHTML=originalContents;
        }
    </script>
</body>

</html>
", "admin.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin.html.twig");
    }
}
