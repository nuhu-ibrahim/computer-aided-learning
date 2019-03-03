<?php

/* home/home.html.twig */
class __TwigTemplate_66c2d1b617cd5e59d9b7223d8af1a1838408208e20516afbdb94c388996ed915 extends Twig_Template
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
        $__internal_6532fc566b193b2f0a034d79804959de4d5b8a86a6bfa725b986f5d6e0261f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6532fc566b193b2f0a034d79804959de4d5b8a86a6bfa725b986f5d6e0261f2e->enter($__internal_6532fc566b193b2f0a034d79804959de4d5b8a86a6bfa725b986f5d6e0261f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_10303a4f8059825fefbe4aad1ab9982ca7f4b7ba3f9d6a41b520ab4e12db8863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10303a4f8059825fefbe4aad1ab9982ca7f4b7ba3f9d6a41b520ab4e12db8863->enter($__internal_10303a4f8059825fefbe4aad1ab9982ca7f4b7ba3f9d6a41b520ab4e12db8863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6532fc566b193b2f0a034d79804959de4d5b8a86a6bfa725b986f5d6e0261f2e->leave($__internal_6532fc566b193b2f0a034d79804959de4d5b8a86a6bfa725b986f5d6e0261f2e_prof);

        
        $__internal_10303a4f8059825fefbe4aad1ab9982ca7f4b7ba3f9d6a41b520ab4e12db8863->leave($__internal_10303a4f8059825fefbe4aad1ab9982ca7f4b7ba3f9d6a41b520ab4e12db8863_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a062b9fab43b5260815716a4fe92a28fee724a1de66ee590f241214f9a2fa673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a062b9fab43b5260815716a4fe92a28fee724a1de66ee590f241214f9a2fa673->enter($__internal_a062b9fab43b5260815716a4fe92a28fee724a1de66ee590f241214f9a2fa673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f51b232ae575786c2f0ac75c97a921fc2c5cbd1f6fe99439b5c9b4ef75211d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51b232ae575786c2f0ac75c97a921fc2c5cbd1f6fe99439b5c9b4ef75211d5c->enter($__internal_f51b232ae575786c2f0ac75c97a921fc2c5cbd1f6fe99439b5c9b4ef75211d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        if (($context["posts"] ?? $this->getContext($context, "posts"))) {
            // line 6
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Posts
                    <small>";
            // line 9
            echo twig_escape_filter($this->env, ($context["category"] ?? $this->getContext($context, "category")), "html", null, true);
            echo "</small>
                </h1>

            </div>
        </div>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
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
        
        $__internal_f51b232ae575786c2f0ac75c97a921fc2c5cbd1f6fe99439b5c9b4ef75211d5c->leave($__internal_f51b232ae575786c2f0ac75c97a921fc2c5cbd1f6fe99439b5c9b4ef75211d5c_prof);

        
        $__internal_a062b9fab43b5260815716a4fe92a28fee724a1de66ee590f241214f9a2fa673->leave($__internal_a062b9fab43b5260815716a4fe92a28fee724a1de66ee590f241214f9a2fa673_prof);

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
        return array (  124 => 36,  121 => 35,  107 => 29,  103 => 28,  98 => 26,  94 => 25,  89 => 23,  82 => 19,  76 => 18,  71 => 15,  67 => 14,  59 => 9,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'home.html.twig' %}

{% block body %}
    
    {% if posts %}
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Posts
                    <small>{{category}}</small>
                </h1>

            </div>
        </div>
        {% for post in posts %}
            <!-- First Blog Post -->
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <a href=\"{{url('post')}}/{{post.getPostId}}\">
                        <img class=\"img-responsive img-hover\" src=\"{{asset([\"uploads/\",post.getPostImage]|join)}}\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-md-5\">
                    <h3>{{post.getCategoryTitle}}</h3>
                    <br>
                    <h4>{{post.getPostTitle}}</h4>
                    <p><span class=\"glyphicon glyphicon-time\"></span> Posted on {{post.getPostDate.format(\"M d, Y \\\\a\\\\t H : i A\")}}</p>
                    <br>
                    <p>{{post.getPostDesc}}</p>
                    <a class=\"btn btn-primary\" href=\"{{url('post')}}/{{post.getPostId}}\" title=\"Click here to view post and download attachments\">View Post</a>
                </div>
            </div>
            <br>
            <hr>
        {% endfor %}
    {%else%}
        <h1 align=\"center\">No posts yet!.</h1>
    {% endif %}
{% endblock body %}", "home/home.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\home\\home.html.twig");
    }
}
