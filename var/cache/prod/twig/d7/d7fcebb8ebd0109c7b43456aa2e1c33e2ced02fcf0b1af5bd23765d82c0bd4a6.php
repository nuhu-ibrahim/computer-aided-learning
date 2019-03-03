<?php

/* admin.html.twig */
class __TwigTemplate_0d396050ef0245ef24a6132b08768d0b31f0bb0cc349c4fd06ef1756769b8531 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getFirstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getSurname", array()), "html", null, true);
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
    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        // line 97
        echo "                    
                ";
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
        return array (  251 => 97,  248 => 96,  199 => 119,  195 => 118,  191 => 117,  185 => 114,  179 => 111,  165 => 99,  163 => 96,  148 => 84,  142 => 81,  139 => 80,  133 => 77,  130 => 76,  128 => 75,  123 => 73,  117 => 70,  111 => 67,  98 => 57,  90 => 54,  82 => 49,  54 => 24,  48 => 21,  42 => 18,  36 => 15,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\computer_aided_learning\\app\\Resources\\views\\admin.html.twig");
    }
}
