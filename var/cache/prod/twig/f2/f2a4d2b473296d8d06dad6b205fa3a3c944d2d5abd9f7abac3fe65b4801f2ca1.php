<?php

/* home/home.html.twig */
class __TwigTemplate_940f90aab4acb360bdaaadb1bb89d9ec404c95b7e35aa756cef618b0bae5a895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home.html.twig", "home/home.html.twig", 1);
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
        echo "    
    ";
        // line 5
        if (($context["posts"] ?? null)) {
            // line 6
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Posts
                    <small>";
            // line 9
            echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
            echo "</small>
                </h1>

            </div>
        </div>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 15
                echo "            <!-- First Blog Post -->
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <a href=\"";
                // line 18
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("post");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostId", array()), "html", null, true);
                echo "\">
                        <img class=\"img-responsive img-hover\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute($context["post"], "getPostImage", array())))), "html", null, true);
                echo "\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-md-5\">
                    <h3>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getCategoryTitle", array()), "html", null, true);
                echo "</h3>
                    <br>
                    <h4>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostTitle", array()), "html", null, true);
                echo "</h4>
                    <p><span class=\"glyphicon glyphicon-time\"></span> Posted on ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getPostDate", array()), "format", array(0 => "M d, Y \\a\\t H : i A"), "method"), "html", null, true);
                echo "</p>
                    <br>
                    <p>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostDesc", array()), "html", null, true);
                echo "</p>
                    <a class=\"btn btn-primary\" href=\"";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("post");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostId", array()), "html", null, true);
                echo "\" title=\"Click here to view post and download attachments\">View Post</a>
                </div>
            </div>
            <br>
            <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "        <h1 align=\"center\">No posts yet!.</h1>
    ";
        }
    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  103 => 35,  89 => 29,  85 => 28,  80 => 26,  76 => 25,  71 => 23,  64 => 19,  58 => 18,  53 => 15,  49 => 14,  41 => 9,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/home.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\computer_aided_learning\\app\\Resources\\views\\home\\home.html.twig");
    }
}
