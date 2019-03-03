<?php

/* home/posts.html.twig */
class __TwigTemplate_e2b8410d30d5a066ad3191ad04d4d1258563d8c6a7583b6a6d096b642f391505 extends Twig_Template
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
        $__internal_2779b109d50c6626744e17f830773a1c0ffd46a35f524472b02e8bcebddc54ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2779b109d50c6626744e17f830773a1c0ffd46a35f524472b02e8bcebddc54ae->enter($__internal_2779b109d50c6626744e17f830773a1c0ffd46a35f524472b02e8bcebddc54ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/posts.html.twig"));

        $__internal_0fd31686b6241eefcb21131eea19eed8bebe3c23a6b6f81c68baafa0140c0b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd31686b6241eefcb21131eea19eed8bebe3c23a6b6f81c68baafa0140c0b47->enter($__internal_0fd31686b6241eefcb21131eea19eed8bebe3c23a6b6f81c68baafa0140c0b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2779b109d50c6626744e17f830773a1c0ffd46a35f524472b02e8bcebddc54ae->leave($__internal_2779b109d50c6626744e17f830773a1c0ffd46a35f524472b02e8bcebddc54ae_prof);

        
        $__internal_0fd31686b6241eefcb21131eea19eed8bebe3c23a6b6f81c68baafa0140c0b47->leave($__internal_0fd31686b6241eefcb21131eea19eed8bebe3c23a6b6f81c68baafa0140c0b47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69f3d83f8a12ec5fb7cfb2a97574296bb9025caba1071c4825862253d85f9df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f3d83f8a12ec5fb7cfb2a97574296bb9025caba1071c4825862253d85f9df0->enter($__internal_69f3d83f8a12ec5fb7cfb2a97574296bb9025caba1071c4825862253d85f9df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1935192c552cb24713052d36d3f51d6cfc8c2511429796bef08c16c54ebbfaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1935192c552cb24713052d36d3f51d6cfc8c2511429796bef08c16c54ebbfaab->enter($__internal_1935192c552cb24713052d36d3f51d6cfc8c2511429796bef08c16c54ebbfaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Title -->
    <div class=\"col-md-10 col-lg-offset-1\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostTitle", array()), "html", null, true);
        echo "</h1>

        <!-- Author -->
        <p class=\"lead\">
            
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class=\"glyphicon glyphicon-time\"></span> Posted on ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostDate", array()), "format", array(0 => "M d, Y \\a\\t H : i A"), "method"), "html", null, true);
        echo "</p>

        <hr>
        
        <!-- Preview Image -->
        <img class=\"img-responsive\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostImage", array())))), "html", null, true);
        echo "\" alt=\"\">

        <hr>

        <!-- Post Content -->
        <h3>Post</h3>
        <p class=\"lead\"  align=\"justify\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostContent", array()), "html", null, true);
        echo "</p>
        <ol>
            ";
        // line 29
        if (($context["attachs"] ?? $this->getContext($context, "attachs"))) {
            // line 30
            echo "                <h3>Documents</h3>
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attachs"] ?? $this->getContext($context, "attachs")));
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
        if (($context["create_msg"] ?? $this->getContext($context, "create_msg"))) {
            // line 45
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 46
            echo twig_escape_filter($this->env, ($context["create_msg"] ?? $this->getContext($context, "create_msg")), "html", null, true);
            echo "
                    </div>
            ";
        }
        // line 49
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            ";
        // line 50
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 51
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        } elseif (        // line 54
($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 55
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment_content", array()), 'errors')) {
            // line 63
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment_content", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 67
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment_content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo " 
        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        ";
        // line 72
        if (($context["comments"] ?? $this->getContext($context, "comments"))) {
            // line 73
            echo "            <hr>
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
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
        
        $__internal_1935192c552cb24713052d36d3f51d6cfc8c2511429796bef08c16c54ebbfaab->leave($__internal_1935192c552cb24713052d36d3f51d6cfc8c2511429796bef08c16c54ebbfaab_prof);

        
        $__internal_69f3d83f8a12ec5fb7cfb2a97574296bb9025caba1071c4825862253d85f9df0->leave($__internal_69f3d83f8a12ec5fb7cfb2a97574296bb9025caba1071c4825862253d85f9df0_prof);

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
        return array (  249 => 89,  245 => 87,  241 => 85,  238 => 84,  228 => 80,  223 => 78,  217 => 77,  213 => 75,  209 => 74,  206 => 73,  204 => 72,  199 => 70,  195 => 69,  189 => 67,  183 => 64,  180 => 63,  178 => 62,  175 => 61,  172 => 60,  163 => 57,  160 => 56,  155 => 55,  153 => 54,  148 => 52,  145 => 51,  143 => 50,  138 => 49,  132 => 46,  129 => 45,  127 => 44,  119 => 38,  115 => 36,  112 => 35,  104 => 33,  97 => 32,  93 => 31,  90 => 30,  88 => 29,  83 => 27,  74 => 21,  66 => 16,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <!-- Title -->
    <div class=\"col-md-10 col-lg-offset-1\">
        <h1>{{post.getPostTitle}}</h1>

        <!-- Author -->
        <p class=\"lead\">
            
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class=\"glyphicon glyphicon-time\"></span> Posted on {{post.getPostDate.format(\"M d, Y \\\\a\\\\t H : i A\")}}</p>

        <hr>
        
        <!-- Preview Image -->
        <img class=\"img-responsive\" src=\"{{asset([\"uploads/\",post.getPostImage]|join)}}\" alt=\"\">

        <hr>

        <!-- Post Content -->
        <h3>Post</h3>
        <p class=\"lead\"  align=\"justify\">{{post.getPostContent}}</p>
        <ol>
            {% if attachs %}
                <h3>Documents</h3>
                {% for attach in attachs %}
                    <li><a href=\"{{asset([\"uploads/\",attach.getAttachment]|join)}}\">{{attach.getAttachment}}</a></li>
                    <p>{{attach.getAttachmentDesc}}</p>
                {% endfor %}
            {%else%}
                <h1 align=\"center\">No documents yet!.</h1>
            {% endif %}
        </ol>
        <hr>
        <!-- Blog Comments -->

        <div class=\"well\">
            <h4>Leave a Comment:</h4>
            {% if create_msg %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        {{ create_msg }}
                    </div>
            {% endif%}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            {% if form_errors(form) %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    {{ form_errors(form) }}
                </div>
            {% elseif errors%}
                {%  for error in errors %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>{{ error }}</li>
                    </div>
                {% endfor %}
            {% endif %}
            <div class=\"form-group\">
                {% if form_errors(form.comment_content) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.comment_content) }}
                    </div>
                {% endif %}
                {{ form_widget(form.comment_content, {'attr': {'class': 'form-control'}}) }}  
            </div>
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }} 
        {{ form_end(form) }}
        </div>
        {% if comments %}
            <hr>
            {% for comment in comments %}
                <div class=\"media\">
                    <div class=\"media-body\">
                        <h3 class=\"media-heading\">{{comment.getFirstname}} {{comment.getSurname}}
                            <small>{{comment.getCommentDate.format(\"M d, Y \\\\a\\\\t H : i A\")}}</small>
                        </h3>
                        {{comment.getCommentContent}}
                    </div>
                </div>
            {% endfor %}
        {% else%}
            <h1>No comments yet!</h1>
        {% endif %}
        <br>
        <hr>
        <a class=\"btn btn-primary\" href=\"{{url('home')}}\">Go back to Home<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
        <br>
        <hr>
    </div>
    
{% endblock %}
", "home/posts.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\home\\posts.html.twig");
    }
}
