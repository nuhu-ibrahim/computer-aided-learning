<?php

/* admin/add_category.html.twig */
class __TwigTemplate_cf567b5e104b8d488101f1dc0993ddf5be6139be28005627bba5a46e15c81777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/add_category.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e7a07a605747ad58bbb2b9c2742b9afef573c44551a8f5a3d520a41b37567b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7a07a605747ad58bbb2b9c2742b9afef573c44551a8f5a3d520a41b37567b8->enter($__internal_4e7a07a605747ad58bbb2b9c2742b9afef573c44551a8f5a3d520a41b37567b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_category.html.twig"));

        $__internal_9083ee2400727f4434e169c37b2413ba924acad7d23ff3a76e97282de17e0849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9083ee2400727f4434e169c37b2413ba924acad7d23ff3a76e97282de17e0849->enter($__internal_9083ee2400727f4434e169c37b2413ba924acad7d23ff3a76e97282de17e0849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7a07a605747ad58bbb2b9c2742b9afef573c44551a8f5a3d520a41b37567b8->leave($__internal_4e7a07a605747ad58bbb2b9c2742b9afef573c44551a8f5a3d520a41b37567b8_prof);

        
        $__internal_9083ee2400727f4434e169c37b2413ba924acad7d23ff3a76e97282de17e0849->leave($__internal_9083ee2400727f4434e169c37b2413ba924acad7d23ff3a76e97282de17e0849_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a8b37a1f1172a47a3254622becb4954ecc5515888c2195e04967d06a697fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a8b37a1f1172a47a3254622becb4954ecc5515888c2195e04967d06a697fe1->enter($__internal_59a8b37a1f1172a47a3254622becb4954ecc5515888c2195e04967d06a697fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c05a30f8be9e0e20559ac7f0157439c706831db5561033639168ea9b1ba0ca5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05a30f8be9e0e20559ac7f0157439c706831db5561033639168ea9b1ba0ca5b->enter($__internal_c05a30f8be9e0e20559ac7f0157439c706831db5561033639168ea9b1ba0ca5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 6
        echo twig_escape_filter($this->env, ($context["page_header"] ?? $this->getContext($context, "page_header")), "html", null, true);
        echo "
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\"> 
        <div class=\"col-md-6\"> 
            <h2>Create Category</h2>
            ";
        // line 14
        if (($context["create_msg"] ?? $this->getContext($context, "create_msg"))) {
            // line 15
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, ($context["create_msg"] ?? $this->getContext($context, "create_msg")), "html", null, true);
            echo "
                    </div>
            ";
        }
        // line 19
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_categories"))));
        echo "
            ";
        // line 20
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 21
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        } elseif (        // line 24
($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <li>";
                // line 27
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        // line 31
        echo "            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Category Title</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_title", array()), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_title", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo " 
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "update", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-6\">
            ";
        // line 46
        if (($context["categories"] ?? $this->getContext($context, "categories"))) {
            // line 47
            echo "                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Category Title</th>
                            <th>Action</th>
                    <tr>
                        ";
            // line 53
            $context["num"] = 0;
            // line 54
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 55
                echo "                        <tr>
                            ";
                // line 56
                $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
                // line 57
                echo "                            <td>";
                echo twig_escape_filter($this->env, ($context["num"] ?? $this->getContext($context, "num")), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getCategoryTitle", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_categories", array("edit" => $this->getAttribute($context["category"], "getCategoryId", array()))), "html", null, true);
                echo "\">Edit</a>
                                <a class=\"btn btn-danger\" onclick='goto(\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_categories", array("delete" => $this->getAttribute($context["category"], "getCategoryId", array()))), "html", null, true);
                echo "\")' id='delete_category'  href='#'>Delete</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
                </table>
            ";
        } else {
            // line 68
            echo "                <h1 align=\"center\">No categories yet!.</h1>
            ";
        }
        // line 70
        echo "        </div>
    </div>   
";
        
        $__internal_c05a30f8be9e0e20559ac7f0157439c706831db5561033639168ea9b1ba0ca5b->leave($__internal_c05a30f8be9e0e20559ac7f0157439c706831db5561033639168ea9b1ba0ca5b_prof);

        
        $__internal_59a8b37a1f1172a47a3254622becb4954ecc5515888c2195e04967d06a697fe1->leave($__internal_59a8b37a1f1172a47a3254622becb4954ecc5515888c2195e04967d06a697fe1_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 70,  200 => 68,  195 => 65,  185 => 61,  181 => 60,  176 => 58,  171 => 57,  169 => 56,  166 => 55,  161 => 54,  159 => 53,  151 => 47,  149 => 46,  142 => 42,  138 => 41,  134 => 40,  128 => 38,  122 => 35,  119 => 34,  117 => 33,  113 => 31,  110 => 30,  101 => 27,  98 => 26,  93 => 25,  91 => 24,  86 => 22,  83 => 21,  81 => 20,  76 => 19,  70 => 16,  67 => 15,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                {{ page_header }}
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\"> 
        <div class=\"col-md-6\"> 
            <h2>Create Category</h2>
            {% if create_msg %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        {{ create_msg }}
                    </div>
            {% endif%}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'action' : url(\"add_categories\")}}) }}
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
                <label for=\"exampleInputEmail1\">Category Title</label>
                {% if form_errors(form.category_title) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.category_title) }}
                    </div>
                {% endif %}
                {{ form_widget(form.category_title, {'attr': {'class': 'form-control'}}) }}  
            </div>
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }} 
            {{ form_widget(form.update, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-6\">
            {% if categories %}
                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Category Title</th>
                            <th>Action</th>
                    <tr>
                        {% set num = 0 %}
                        {% for category in categories %}
                        <tr>
                            {% set num=num+1  %}
                            <td>{{ num }}</td>
                            <td>{{category.getCategoryTitle}}</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"{{url(\"edit_categories\", {'edit': category.getCategoryId })}}\">Edit</a>
                                <a class=\"btn btn-danger\" onclick='goto(\"{{url(\"delete_categories\", {'delete': category.getCategoryId })}}\")' id='delete_category'  href='#'>Delete</a>
                            </td>
                        </tr>
                    {% endfor %}

                </table>
            {%else%}
                <h1 align=\"center\">No categories yet!.</h1>
            {% endif %}
        </div>
    </div>   
{% endblock %}
", "admin/add_category.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\add_category.html.twig");
    }
}
