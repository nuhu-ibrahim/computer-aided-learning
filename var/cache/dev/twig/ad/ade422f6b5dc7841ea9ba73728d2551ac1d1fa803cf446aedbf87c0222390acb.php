<?php

/* admin/list_request.html.twig */
class __TwigTemplate_1358f4cb01ac912212dd756f165aeecfc9ed08897bccea6bdb8758558ce4e941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/list_request.html.twig", 1);
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
        $__internal_6e6314926287f1db735f0425d340decd8a5e8535476374d36827ebee7392bc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6314926287f1db735f0425d340decd8a5e8535476374d36827ebee7392bc2c->enter($__internal_6e6314926287f1db735f0425d340decd8a5e8535476374d36827ebee7392bc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/list_request.html.twig"));

        $__internal_baea8b71496fd7c3fa2521711f4ce31caaa40256835774905b2b57776b54c741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baea8b71496fd7c3fa2521711f4ce31caaa40256835774905b2b57776b54c741->enter($__internal_baea8b71496fd7c3fa2521711f4ce31caaa40256835774905b2b57776b54c741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/list_request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e6314926287f1db735f0425d340decd8a5e8535476374d36827ebee7392bc2c->leave($__internal_6e6314926287f1db735f0425d340decd8a5e8535476374d36827ebee7392bc2c_prof);

        
        $__internal_baea8b71496fd7c3fa2521711f4ce31caaa40256835774905b2b57776b54c741->leave($__internal_baea8b71496fd7c3fa2521711f4ce31caaa40256835774905b2b57776b54c741_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c0783083fc5f4489010bb28f93b28c987799f6e6682f405bee0e282868b59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c0783083fc5f4489010bb28f93b28c987799f6e6682f405bee0e282868b59f->enter($__internal_73c0783083fc5f4489010bb28f93b28c987799f6e6682f405bee0e282868b59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21c59685fc19217612bb257d4436a88572ca4ec9578bb10f19cff89798192e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c59685fc19217612bb257d4436a88572ca4ec9578bb10f19cff89798192e47->enter($__internal_21c59685fc19217612bb257d4436a88572ca4ec9578bb10f19cff89798192e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col-md-12 table-responsive\">
           <table class=\"table table-hover table-bordered\">
                    <tr>
                        <th>#</th>
                        <th>Property Title</th>
                        <th>Client Name</th>
                        <th>Client Email</th>
                        <th>Client Mobile Number</th>
                        <th>Client Message</th>
                        <th>Post Status</th>
                        <th>Action</th> 
                    <tr>
                    ";
        // line 24
        $context["num"] = 0;
        // line 25
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["requests"] ?? $this->getContext($context, "requests")));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 26
            echo "                    <tr>
                        ";
            // line 27
            $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
            // line 28
            echo "                        <td>";
            echo twig_escape_filter($this->env, ($context["num"] ?? $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "getPropertyTitle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "getClientName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "getClientEmail", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "getClientMobile", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "getClientMsg", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "getPostStatus", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("request_details", array("id" => $this->getAttribute($context["request"], "getRequestId", array()))), "html", null, true);
            echo "\">Full Details</a>
                            </td>
                    </tr> 
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    
            </table>
        </div>
    </div>   
";
        
        $__internal_21c59685fc19217612bb257d4436a88572ca4ec9578bb10f19cff89798192e47->leave($__internal_21c59685fc19217612bb257d4436a88572ca4ec9578bb10f19cff89798192e47_prof);

        
        $__internal_73c0783083fc5f4489010bb28f93b28c987799f6e6682f405bee0e282868b59f->leave($__internal_73c0783083fc5f4489010bb28f93b28c987799f6e6682f405bee0e282868b59f_prof);

    }

    public function getTemplateName()
    {
        return "admin/list_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  117 => 36,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  87 => 28,  85 => 27,  82 => 26,  77 => 25,  75 => 24,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-md-12 table-responsive\">
           <table class=\"table table-hover table-bordered\">
                    <tr>
                        <th>#</th>
                        <th>Property Title</th>
                        <th>Client Name</th>
                        <th>Client Email</th>
                        <th>Client Mobile Number</th>
                        <th>Client Message</th>
                        <th>Post Status</th>
                        <th>Action</th> 
                    <tr>
                    {% set num = 0 %}
                    {% for request in requests %}
                    <tr>
                        {% set num=num+1  %}
                        <td>{{ num }}</td>
                            <td>{{request.getPropertyTitle}}</td>
                            <td>{{request.getClientName}}</td>
                            <td>{{request.getClientEmail}}</td>
                            <td>{{request.getClientMobile}}</td>
                            <td>{{request.getClientMsg}}</td>
                            <td>{{request.getPostStatus}}</td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"{{url(\"request_details\", {'id': request.getRequestId })}}\">Full Details</a>
                            </td>
                    </tr> 
                    
                    {% endfor %}
                    
            </table>
        </div>
    </div>   
{% endblock %}
", "admin/list_request.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\list_request.html.twig");
    }
}
