<?php

/* admin/edit_user.html.twig */
class __TwigTemplate_b671bc0cae35b8fb25f774788d5e68dca7c9eef012fbb4b19c93ef08ea24ed4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/edit_user.html.twig", 1);
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
        $__internal_fd49ed842399982e8db5d1544858a2bc646a30fd3359edf103f253a5632aef5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd49ed842399982e8db5d1544858a2bc646a30fd3359edf103f253a5632aef5b->enter($__internal_fd49ed842399982e8db5d1544858a2bc646a30fd3359edf103f253a5632aef5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_user.html.twig"));

        $__internal_8d10cddb5dc73faf17f6860518e008d436ec7e2cd1a7510b6b7dbb5723124447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d10cddb5dc73faf17f6860518e008d436ec7e2cd1a7510b6b7dbb5723124447->enter($__internal_8d10cddb5dc73faf17f6860518e008d436ec7e2cd1a7510b6b7dbb5723124447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd49ed842399982e8db5d1544858a2bc646a30fd3359edf103f253a5632aef5b->leave($__internal_fd49ed842399982e8db5d1544858a2bc646a30fd3359edf103f253a5632aef5b_prof);

        
        $__internal_8d10cddb5dc73faf17f6860518e008d436ec7e2cd1a7510b6b7dbb5723124447->leave($__internal_8d10cddb5dc73faf17f6860518e008d436ec7e2cd1a7510b6b7dbb5723124447_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ad6032bb9276ed8d596319a39db9dd9e52ea682adad3c3421ab5d3662b05b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad6032bb9276ed8d596319a39db9dd9e52ea682adad3c3421ab5d3662b05b3f->enter($__internal_3ad6032bb9276ed8d596319a39db9dd9e52ea682adad3c3421ab5d3662b05b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e55494600e7741da4902ed23752a7a5f71704934ce4972599b6eddf5eaf7dd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55494600e7741da4902ed23752a7a5f71704934ce4972599b6eddf5eaf7dd0b->enter($__internal_e55494600e7741da4902ed23752a7a5f71704934ce4972599b6eddf5eaf7dd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>Edit User</h2>
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
                ";
        // line 68
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors')) {
            // line 69
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 73
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "display:none")));
        echo "  
            </div>
            <div class=\"form-group\">
                ";
        // line 76
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors')) {
            // line 77
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 81
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "display:none")));
        echo "  
            </div>
            <div class=\"form-group\">
                ";
        // line 84
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cpassword", array()), 'errors')) {
            // line 85
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cpassword", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 89
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cpassword", array()), 'widget', array("attr" => array("class" => "form-control", "style" => "display:none")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Role</label>
                ";
        // line 93
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'errors')) {
            // line 94
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 98
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "update", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "  
            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-8 table-responsive\">
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
                    ";
        // line 117
        $context["num"] = 0;
        // line 118
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 119
            echo "                    <tr>
                        ";
            // line 120
            $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
            // line 121
            echo "                        <td>";
            echo twig_escape_filter($this->env, ($context["num"] ?? $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                            <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getSurname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getFirstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getEmail", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getUsername", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getRole", array()), "html", null, true);
            echo "</td>
                            <td>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_users", array("edit" => $this->getAttribute($context["u"], "getId", array()))), "html", null, true);
            echo "\">Edit</a>
                                    <a class=\"btn btn-danger\" onclick='goto3(\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_users", array("delete" => $this->getAttribute($context["u"], "getId", array()))), "html", null, true);
            echo "\")' href='#'>Delete</a>
                            </td>
                    </tr> 
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                    
            </table>
        </div>
    </div>   
";
        
        $__internal_e55494600e7741da4902ed23752a7a5f71704934ce4972599b6eddf5eaf7dd0b->leave($__internal_e55494600e7741da4902ed23752a7a5f71704934ce4972599b6eddf5eaf7dd0b_prof);

        
        $__internal_3ad6032bb9276ed8d596319a39db9dd9e52ea682adad3c3421ab5d3662b05b3f->leave($__internal_3ad6032bb9276ed8d596319a39db9dd9e52ea682adad3c3421ab5d3662b05b3f_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 134,  332 => 129,  328 => 128,  323 => 126,  319 => 125,  315 => 124,  311 => 123,  307 => 122,  302 => 121,  300 => 120,  297 => 119,  292 => 118,  290 => 117,  272 => 102,  268 => 101,  264 => 100,  258 => 98,  252 => 95,  249 => 94,  247 => 93,  239 => 89,  233 => 86,  230 => 85,  228 => 84,  221 => 81,  215 => 78,  212 => 77,  210 => 76,  203 => 73,  197 => 70,  194 => 69,  192 => 68,  185 => 65,  179 => 62,  176 => 61,  174 => 60,  166 => 56,  160 => 53,  157 => 52,  155 => 51,  147 => 47,  141 => 44,  138 => 43,  136 => 42,  128 => 38,  122 => 35,  119 => 34,  117 => 33,  113 => 31,  110 => 30,  101 => 27,  98 => 26,  93 => 25,  91 => 24,  86 => 22,  83 => 21,  81 => 20,  76 => 19,  70 => 16,  67 => 15,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <h2>Edit User</h2>
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
                {% if form_errors(form.username) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.username) }}
                    </div>
                {% endif %}
                {{ form_widget(form.username, {'attr': {'class': 'form-control','style' : 'display:none'}}) }}  
            </div>
            <div class=\"form-group\">
                {% if form_errors(form.password) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.password) }}
                    </div>
                {% endif %}
                {{ form_widget(form.password, {'attr': {'class': 'form-control', 'style' : 'display:none'}}) }}  
            </div>
            <div class=\"form-group\">
                {% if form_errors(form.cpassword) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.cpassword) }}
                    </div>
                {% endif %}
                {{ form_widget(form.cpassword, {'attr': {'class': 'form-control', 'style' : 'display:none'}}) }}  
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
            {{ form_widget(form.update, {'attr': {'class': 'btn btn-primary'}}) }}  
            {{ form_widget(form.submit, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-8 table-responsive\">
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
        </div>
    </div>   
{% endblock %}
", "admin/edit_user.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\edit_user.html.twig");
    }
}
