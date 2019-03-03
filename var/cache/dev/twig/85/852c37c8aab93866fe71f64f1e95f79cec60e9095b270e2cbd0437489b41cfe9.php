<?php

/* admin/edit_category.html.twig */
class __TwigTemplate_4b2c8c2c2f248b76b4d3edfc58dd7837802e8891ee93f5c0bb60d375bf3596fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/edit_category.html.twig", 1);
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
        $__internal_0bfdfadbe5bbb318cf7a59b53dd394bd30c0658010eaf0599df3ef83d3c2fc4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfdfadbe5bbb318cf7a59b53dd394bd30c0658010eaf0599df3ef83d3c2fc4a->enter($__internal_0bfdfadbe5bbb318cf7a59b53dd394bd30c0658010eaf0599df3ef83d3c2fc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_category.html.twig"));

        $__internal_7b6990cd054630ff9666590e253103406c73b4861d0b921e3e1abb347b12ecbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6990cd054630ff9666590e253103406c73b4861d0b921e3e1abb347b12ecbd->enter($__internal_7b6990cd054630ff9666590e253103406c73b4861d0b921e3e1abb347b12ecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfdfadbe5bbb318cf7a59b53dd394bd30c0658010eaf0599df3ef83d3c2fc4a->leave($__internal_0bfdfadbe5bbb318cf7a59b53dd394bd30c0658010eaf0599df3ef83d3c2fc4a_prof);

        
        $__internal_7b6990cd054630ff9666590e253103406c73b4861d0b921e3e1abb347b12ecbd->leave($__internal_7b6990cd054630ff9666590e253103406c73b4861d0b921e3e1abb347b12ecbd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c770d3510f6cfffd5ae148651e22116437d556c770b1b6150b3946122b4aa587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c770d3510f6cfffd5ae148651e22116437d556c770b1b6150b3946122b4aa587->enter($__internal_c770d3510f6cfffd5ae148651e22116437d556c770b1b6150b3946122b4aa587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c01c2803143d8761f2a9e6802a07ad700448527594cf326da646d9df7272757e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01c2803143d8761f2a9e6802a07ad700448527594cf326da646d9df7272757e->enter($__internal_c01c2803143d8761f2a9e6802a07ad700448527594cf326da646d9df7272757e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>Edit Category</h2>
            ";
        // line 14
        if (($context["update_msg"] ?? $this->getContext($context, "update_msg"))) {
            // line 15
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, ($context["update_msg"] ?? $this->getContext($context, "update_msg")), "html", null, true);
            echo "
                    </div>
            ";
        }
        // line 19
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
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
                <input type=\"hidden\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["update_details"] ?? $this->getContext($context, "update_details")), "getCategoryId", array()), "html", null, true);
        echo "\" name=\"id\">
                ";
        // line 34
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_title", array()), 'errors')) {
            // line 35
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_title", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 39
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_title", array()), 'widget', array("attr" => array("class" => "form-control", "value" => $this->getAttribute(($context["update_details"] ?? $this->getContext($context, "update_details")), "getCategoryTitle", array()))));
        echo "  
            </div>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "update", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "  
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-6\">
            <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Category Title</th>
                            <th>Action</th>
                    <tr>
                    ";
        // line 53
        $context["num"] = 0;
        // line 54
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 55
            echo "                    <tr>
                        ";
            // line 56
            $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
            // line 57
            echo "                        <td>";
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
        // line 66
        echo "                    
            </table>
        </div>
    </div>   
";
        
        $__internal_c01c2803143d8761f2a9e6802a07ad700448527594cf326da646d9df7272757e->leave($__internal_c01c2803143d8761f2a9e6802a07ad700448527594cf326da646d9df7272757e_prof);

        
        $__internal_c770d3510f6cfffd5ae148651e22116437d556c770b1b6150b3946122b4aa587->leave($__internal_c770d3510f6cfffd5ae148651e22116437d556c770b1b6150b3946122b4aa587_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 66,  185 => 61,  181 => 60,  176 => 58,  171 => 57,  169 => 56,  166 => 55,  161 => 54,  159 => 53,  146 => 43,  142 => 42,  138 => 41,  132 => 39,  126 => 36,  123 => 35,  121 => 34,  117 => 33,  113 => 31,  110 => 30,  101 => 27,  98 => 26,  93 => 25,  91 => 24,  86 => 22,  83 => 21,  81 => 20,  76 => 19,  70 => 16,  67 => 15,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <h2>Edit Category</h2>
            {% if update_msg %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        {{ update_msg }}
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
                <label for=\"exampleInputEmail1\">Category Title</label>
                <input type=\"hidden\" value=\"{{update_details.getCategoryId}}\" name=\"id\">
                {% if form_errors(form.category_title) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.category_title) }}
                    </div>
                {% endif %}
                {{ form_widget(form.category_title, {'attr': {'class': 'form-control', 'value': update_details.getCategoryTitle}}) }}  
            </div>
            {{ form_widget(form.update, {'attr': {'class': 'btn btn-primary'}}) }}  
            {{ form_widget(form.submit, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-6\">
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
        </div>
    </div>   
{% endblock %}
", "admin/edit_category.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\edit_category.html.twig");
    }
}
