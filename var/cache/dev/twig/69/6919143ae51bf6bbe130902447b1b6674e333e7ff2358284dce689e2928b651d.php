<?php

/* admin/add_users.html.twig */
class __TwigTemplate_164308fd86d630e84813202ec9b87f9391031fc23c1bea246e7fef053d6b9b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/add_users.html.twig", 1);
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
        $__internal_337d1133dda060c035dbdc68d96d6d3f6c5d365030ba1e1c6ee99261a43d31cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337d1133dda060c035dbdc68d96d6d3f6c5d365030ba1e1c6ee99261a43d31cb->enter($__internal_337d1133dda060c035dbdc68d96d6d3f6c5d365030ba1e1c6ee99261a43d31cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_users.html.twig"));

        $__internal_d80f85d849a9bdc5ecba78b26f3929cf1ebfd522cce7a839fcb5fc8de8e531c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80f85d849a9bdc5ecba78b26f3929cf1ebfd522cce7a839fcb5fc8de8e531c8->enter($__internal_d80f85d849a9bdc5ecba78b26f3929cf1ebfd522cce7a839fcb5fc8de8e531c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/add_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337d1133dda060c035dbdc68d96d6d3f6c5d365030ba1e1c6ee99261a43d31cb->leave($__internal_337d1133dda060c035dbdc68d96d6d3f6c5d365030ba1e1c6ee99261a43d31cb_prof);

        
        $__internal_d80f85d849a9bdc5ecba78b26f3929cf1ebfd522cce7a839fcb5fc8de8e531c8->leave($__internal_d80f85d849a9bdc5ecba78b26f3929cf1ebfd522cce7a839fcb5fc8de8e531c8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_644192883ddddc7f8a27a9f26651945eda458632766ece1af6da34d4be3eaf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644192883ddddc7f8a27a9f26651945eda458632766ece1af6da34d4be3eaf18->enter($__internal_644192883ddddc7f8a27a9f26651945eda458632766ece1af6da34d4be3eaf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f17f321300e038167960d8fbe1e9d68a9702144e37d3f58265d13e2c3777e7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17f321300e038167960d8fbe1e9d68a9702144e37d3f58265d13e2c3777e7db->enter($__internal_f17f321300e038167960d8fbe1e9d68a9702144e37d3f58265d13e2c3777e7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col-md-4\"> 
            <h2>Add User</h2>
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
                <label for=\"exampleInputEmail1\">Surname</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Othername</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "othername", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Firstname</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email</label>
                ";
        // line 60
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) {
            // line 61
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 65
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Username</label>
                ";
        // line 69
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors')) {
            // line 70
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Password</label>
                ";
        // line 78
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors')) {
            // line 79
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 80
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 83
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Confirm Password</label>
                ";
        // line 87
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cpassword", array()), 'errors')) {
            // line 88
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cpassword", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 92
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cpassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Role</label>
                ";
        // line 96
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'errors')) {
            // line 97
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 101
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo " 
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "update", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
        
        <div class=\"col-md-8 table-responsive\">
            ";
        // line 109
        if (($context["users"] ?? $this->getContext($context, "users"))) {
            // line 110
            echo "                <table class=\"table table-hover table-bordered\">
                     <tr>
                         <th>#</th>
                         <th>User Surname</th>
                         <th>User Firstname</th>
                         <th>User Email</th>
                         <th>Username</th>
                         <th>Role</th>
                         <th>Action</th>

                     <tr>
                     ";
            // line 121
            $context["num"] = 0;
            // line 122
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 123
                echo "                         <tr>
                             ";
                // line 124
                $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
                // line 125
                echo "                             <td>";
                echo twig_escape_filter($this->env, ($context["num"] ?? $this->getContext($context, "num")), "html", null, true);
                echo "</td>
                             <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getSurname", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getFirstname", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getEmail", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getUsername", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getRole", array()), "html", null, true);
                echo "</td>
                             <td>
                                     <a class=\"btn btn-primary\" href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_users", array("edit" => $this->getAttribute($context["u"], "getId", array()))), "html", null, true);
                echo "\">Edit</a>
                                     <a class=\"btn btn-danger\" onclick='goto3(\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_users", array("delete" => $this->getAttribute($context["u"], "getId", array()))), "html", null, true);
                echo "\")' href='#'>Delete</a>
                             </td>
                         </tr> 
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                 </table>
            ";
        } else {
            // line 139
            echo "                <h1 align=\"center\">No users yet!.</h1>
            ";
        }
        // line 141
        echo "        </div>
    </div>   
";
        
        $__internal_f17f321300e038167960d8fbe1e9d68a9702144e37d3f58265d13e2c3777e7db->leave($__internal_f17f321300e038167960d8fbe1e9d68a9702144e37d3f58265d13e2c3777e7db_prof);

        
        $__internal_644192883ddddc7f8a27a9f26651945eda458632766ece1af6da34d4be3eaf18->leave($__internal_644192883ddddc7f8a27a9f26651945eda458632766ece1af6da34d4be3eaf18_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 141,  353 => 139,  349 => 137,  339 => 133,  335 => 132,  330 => 130,  326 => 129,  322 => 128,  318 => 127,  314 => 126,  309 => 125,  307 => 124,  304 => 123,  299 => 122,  297 => 121,  284 => 110,  282 => 109,  275 => 105,  271 => 104,  267 => 103,  261 => 101,  255 => 98,  252 => 97,  250 => 96,  242 => 92,  236 => 89,  233 => 88,  231 => 87,  223 => 83,  217 => 80,  214 => 79,  212 => 78,  204 => 74,  198 => 71,  195 => 70,  193 => 69,  185 => 65,  179 => 62,  176 => 61,  174 => 60,  166 => 56,  160 => 53,  157 => 52,  155 => 51,  147 => 47,  141 => 44,  138 => 43,  136 => 42,  128 => 38,  122 => 35,  119 => 34,  117 => 33,  113 => 31,  110 => 30,  101 => 27,  98 => 26,  93 => 25,  91 => 24,  86 => 22,  83 => 21,  81 => 20,  76 => 19,  70 => 16,  67 => 15,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-md-4\"> 
            <h2>Add User</h2>
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
                <label for=\"exampleInputEmail1\">Surname</label>
                {% if form_errors(form.surname) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.surname) }}
                    </div>
                {% endif %}
                {{ form_widget(form.surname, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Othername</label>
                {% if form_errors(form.othername) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.othername) }}
                    </div>
                {% endif %}
                {{ form_widget(form.othername, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Firstname</label>
                {% if form_errors(form.firstname) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.firstname) }}
                    </div>
                {% endif %}
                {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email</label>
                {% if form_errors(form.email) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.email) }}
                    </div>
                {% endif %}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Username</label>
                {% if form_errors(form.username) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.username) }}
                    </div>
                {% endif %}
                {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Password</label>
                {% if form_errors(form.password) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.password) }}
                    </div>
                {% endif %}
                {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Confirm Password</label>
                {% if form_errors(form.cpassword) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.cpassword) }}
                    </div>
                {% endif %}
                {{ form_widget(form.cpassword, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Role</label>
                {% if form_errors(form.role) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.role) }}
                    </div>
                {% endif %}
                {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}  
            </div>
            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }} 
            {{ form_widget(form.update, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
    </div>
        
        <div class=\"col-md-8 table-responsive\">
            {% if users %}
                <table class=\"table table-hover table-bordered\">
                     <tr>
                         <th>#</th>
                         <th>User Surname</th>
                         <th>User Firstname</th>
                         <th>User Email</th>
                         <th>Username</th>
                         <th>Role</th>
                         <th>Action</th>

                     <tr>
                     {% set num = 0 %}
                     {% for u in users %}
                         <tr>
                             {% set num=num+1  %}
                             <td>{{ num }}</td>
                             <td>{{u.getSurname}}</td>
                             <td>{{u.getFirstname}}</td>
                             <td>{{u.getEmail}}</td>
                             <td>{{u.getUsername}}</td>
                             <td>{{u.getRole}}</td>
                             <td>
                                     <a class=\"btn btn-primary\" href=\"{{url(\"edit_users\", {'edit': u.getId })}}\">Edit</a>
                                     <a class=\"btn btn-danger\" onclick='goto3(\"{{url(\"delete_users\", {'delete': u.getId })}}\")' href='#'>Delete</a>
                             </td>
                         </tr> 
                     {% endfor %}
                 </table>
            {%else%}
                <h1 align=\"center\">No users yet!.</h1>
            {% endif %}
        </div>
    </div>   
{% endblock %}
", "admin/add_users.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\add_users.html.twig");
    }
}
