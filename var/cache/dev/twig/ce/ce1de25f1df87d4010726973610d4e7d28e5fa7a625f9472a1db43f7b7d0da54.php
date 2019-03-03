<?php

/* admin/edit_attachment.html.twig */
class __TwigTemplate_56a12e91486461fdf4286230f8ad6aef01381c11aa7b0b2dde42f5b5c96cc518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/edit_attachment.html.twig", 1);
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
        $__internal_b064a2d5574631ea9b5f44488c80f75572762a1434275da9d070a2156ccaf34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b064a2d5574631ea9b5f44488c80f75572762a1434275da9d070a2156ccaf34b->enter($__internal_b064a2d5574631ea9b5f44488c80f75572762a1434275da9d070a2156ccaf34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_attachment.html.twig"));

        $__internal_070e011acfe9b2ed2693345149178f17e1d5b2543435d11d8a17965fa128c113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070e011acfe9b2ed2693345149178f17e1d5b2543435d11d8a17965fa128c113->enter($__internal_070e011acfe9b2ed2693345149178f17e1d5b2543435d11d8a17965fa128c113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_attachment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b064a2d5574631ea9b5f44488c80f75572762a1434275da9d070a2156ccaf34b->leave($__internal_b064a2d5574631ea9b5f44488c80f75572762a1434275da9d070a2156ccaf34b_prof);

        
        $__internal_070e011acfe9b2ed2693345149178f17e1d5b2543435d11d8a17965fa128c113->leave($__internal_070e011acfe9b2ed2693345149178f17e1d5b2543435d11d8a17965fa128c113_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_80d1dff0c61a8c6aebe3067ad833fbf1cd50e09b5d43941cf4e71027fef235c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d1dff0c61a8c6aebe3067ad833fbf1cd50e09b5d43941cf4e71027fef235c2->enter($__internal_80d1dff0c61a8c6aebe3067ad833fbf1cd50e09b5d43941cf4e71027fef235c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_567a2f5785b1b7f5335875d8079168bea3be5f38699ed6e902e356ccf6e6d1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567a2f5785b1b7f5335875d8079168bea3be5f38699ed6e902e356ccf6e6d1dc->enter($__internal_567a2f5785b1b7f5335875d8079168bea3be5f38699ed6e902e356ccf6e6d1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>Edit Attachment</h2>
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
                <label for=\"exampleInputEmail1\">Post Title</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_id", array()), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_id", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Attachment</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attachment", array()), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attachment", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attachment", array()), 'widget');
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Property Attachment Description</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attachment_desc", array()), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attachment_desc", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attachment_desc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "update", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "  
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-8\">
            <table class=\"table table-striped\">
                <tr>
                        <th>#</th>
                        <th>Post Title</th>
                        <th>Post Attachment</th>
                        <th>Post Attachment Desc</th>
                        <th>Action</th>
                <tr>
                ";
        // line 72
        $context["num"] = 0;
        // line 73
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attachments"] ?? $this->getContext($context, "attachments")));
        foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
            // line 74
            echo "                <tr>
                    ";
            // line 75
            $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
            // line 76
            echo "                    <td>";
            echo twig_escape_filter($this->env, ($context["num"] ?? $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getPostTitle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getAttachment", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getAttachmentDesc", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-primary\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_attachment", array("edit" => $this->getAttribute($context["attach"], "getAttachmentId", array()))), "html", null, true);
            echo "\">Edit</a>
                        <a class=\"btn btn-danger\" onclick='goto2(\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_attachment", array("delete" => $this->getAttribute($context["attach"], "getAttachmentId", array()))), "html", null, true);
            echo "\")' id='delete_attachment'  href='#'>Delete</a>
                    </td>
                </tr>      
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </table>
        </div>
        </div>
    </div>   
";
        
        $__internal_567a2f5785b1b7f5335875d8079168bea3be5f38699ed6e902e356ccf6e6d1dc->leave($__internal_567a2f5785b1b7f5335875d8079168bea3be5f38699ed6e902e356ccf6e6d1dc_prof);

        
        $__internal_80d1dff0c61a8c6aebe3067ad833fbf1cd50e09b5d43941cf4e71027fef235c2->leave($__internal_80d1dff0c61a8c6aebe3067ad833fbf1cd50e09b5d43941cf4e71027fef235c2_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_attachment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 86,  229 => 82,  225 => 81,  220 => 79,  216 => 78,  212 => 77,  207 => 76,  205 => 75,  202 => 74,  197 => 73,  195 => 72,  180 => 60,  176 => 59,  172 => 58,  166 => 56,  160 => 53,  157 => 52,  155 => 51,  147 => 47,  141 => 44,  138 => 43,  136 => 42,  128 => 38,  122 => 35,  119 => 34,  117 => 33,  113 => 31,  110 => 30,  101 => 27,  98 => 26,  93 => 25,  91 => 24,  86 => 22,  83 => 21,  81 => 20,  76 => 19,  70 => 16,  67 => 15,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <h2>Edit Attachment</h2>
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
                <label for=\"exampleInputEmail1\">Post Title</label>
                {% if form_errors(form.post_id) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.post_id) }}
                    </div>
                {% endif %}
                {{ form_widget(form.post_id, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Attachment</label>
                {% if form_errors(form.attachment) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.attachment) }}
                    </div>
                {% endif %}
                {{ form_widget(form.attachment) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Property Attachment Description</label>
                {% if form_errors(form.attachment_desc) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.attachment_desc) }}
                    </div>
                {% endif %}
                {{ form_widget(form.attachment_desc, {'attr': {'class': 'form-control'}}) }}  
            </div>
            {{ form_widget(form.update, {'attr': {'class': 'btn btn-primary'}}) }}  
            {{ form_widget(form.submit, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-8\">
            <table class=\"table table-striped\">
                <tr>
                        <th>#</th>
                        <th>Post Title</th>
                        <th>Post Attachment</th>
                        <th>Post Attachment Desc</th>
                        <th>Action</th>
                <tr>
                {% set num = 0 %}
                {% for attach in attachments %}
                <tr>
                    {% set num=num+1  %}
                    <td>{{ num }}</td>
                    <td>{{attach.getPostTitle}}</td>
                    <td>{{attach.getAttachment}}</td>
                    <td>{{attach.getAttachmentDesc}}</td>
                    <td>
                        <a class=\"btn btn-primary\" href=\"{{url(\"edit_attachment\", {'edit': attach.getAttachmentId })}}\">Edit</a>
                        <a class=\"btn btn-danger\" onclick='goto2(\"{{url(\"delete_attachment\", {'delete': attach.getAttachmentId })}}\")' id='delete_attachment'  href='#'>Delete</a>
                    </td>
                </tr>      
                {% endfor %}
            </table>
        </div>
        </div>
    </div>   
{% endblock %}
", "admin/edit_attachment.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\edit_attachment.html.twig");
    }
}
