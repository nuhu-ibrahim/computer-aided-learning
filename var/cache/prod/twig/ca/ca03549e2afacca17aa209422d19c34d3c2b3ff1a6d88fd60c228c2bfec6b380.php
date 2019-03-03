<?php

/* home/posts.html.twig */
class __TwigTemplate_795dd6c302dd4be4e308ad894b7fcb5829bfa7060dba1491bfecdc8e330e22fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home.html.twig", "home/posts.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Title -->
    <div class=\"col-md-10 col-lg-offset-1\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "getPostTitle", array()), "html", null, true);
        echo "</h1>

        <!-- Author -->
        <p class=\"lead\">
            
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class=\"glyphicon glyphicon-time\"></span> Posted on ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "getPostDate", array()), "format", array(0 => "M d, Y \\a\\t H : i A"), "method"), "html", null, true);
        echo "</p>

        <hr>
        
        <!-- Preview Image -->
        <img class=\"img-responsive\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute(($context["post"] ?? null), "getPostImage", array())))), "html", null, true);
        echo "\" alt=\"\">

        <hr>

        <!-- Post Content -->
        <h3>Post</h3>
        <p class=\"lead\"  align=\"justify\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "getPostContent", array()), "html", null, true);
        echo "</p>
        <ol>
            ";
        // line 29
        if (($context["attachs"] ?? null)) {
            // line 30
            echo "                <h3>Documents</h3>
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attachs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 32
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute($context["attach"], "getAttachment", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getAttachment", array()), "html", null, true);
                echo "</a></li>
                    <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getAttachmentDesc", array()), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        } else {
            // line 36
            echo "                <h1 align=\"center\">No documents yet!.</h1>
            ";
        }
        // line 38
        echo "        </ol>
        <hr>
        <!-- Blog Comments -->

        <div class=\"well\">
            <h4>Leave a Comment:</h4>
            ";
        // line 44
        if (($context["create_msg"] ?? null)) {
            // line 45
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 46
            echo twig_escape_filter($this->env, ($context["create_msg"] ?? null), "html", null, true);
            echo "
                    </div>
            ";
        }
        // line 49
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            ";
        // line 50
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) {
            // line 51
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        } elseif (        // line 54
($context["errors"] ?? null)) {
            // line 55
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 56
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>";
                // line 57
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            ";
        }
        // line 61
        echo "            <div class=\"form-group\">
                ";
        // line 62
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment_content", array()), 'errors')) {
            // line 63
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment_content", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 67
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment_content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo " 
        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
        ";
        // line 72
        if (($context["comments"] ?? null)) {
            // line 73
            echo "            <hr>
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 75
                echo "                <div class=\"media\">
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getFirstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getSurname", array()), "html", null, true);
                echo "
                            <small>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getCommentDate", array()), "format", array(0 => "M d, Y \\a\\t H : i A"), "method"), "html", null, true);
                echo "</small>
                        </h3>
                        ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getCommentContent", array()), "html", null, true);
                echo "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "        ";
        } else {
            // line 85
            echo "            <h1>No comments yet!</h1>
        ";
        }
        // line 87
        echo "        <br>
        <hr>
        <a class=\"btn btn-primary\" href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("home");
        echo "\">Go back to Home<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
        <br>
        <hr>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "home/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 89,  227 => 87,  223 => 85,  220 => 84,  210 => 80,  205 => 78,  199 => 77,  195 => 75,  191 => 74,  188 => 73,  186 => 72,  181 => 70,  177 => 69,  171 => 67,  165 => 64,  162 => 63,  160 => 62,  157 => 61,  154 => 60,  145 => 57,  142 => 56,  137 => 55,  135 => 54,  130 => 52,  127 => 51,  125 => 50,  120 => 49,  114 => 46,  111 => 45,  109 => 44,  101 => 38,  97 => 36,  94 => 35,  86 => 33,  79 => 32,  75 => 31,  72 => 30,  70 => 29,  65 => 27,  56 => 21,  48 => 16,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/posts.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\computer_aided_learning\\app\\Resources\\views\\home\\posts.html.twig");
    }
}
