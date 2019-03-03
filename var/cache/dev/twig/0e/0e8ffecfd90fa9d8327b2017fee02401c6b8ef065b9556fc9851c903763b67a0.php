<?php

/* admin/list_comment.html.twig */
class __TwigTemplate_b9c8f10b617f51221ebad32b5ad40894bfedf53dc91244cb545bba541ecfb82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/list_comment.html.twig", 1);
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
        $__internal_dd534c70533439339b1533a03488204c2420e9fd2cdbfd6f9c960cf0d47f25af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd534c70533439339b1533a03488204c2420e9fd2cdbfd6f9c960cf0d47f25af->enter($__internal_dd534c70533439339b1533a03488204c2420e9fd2cdbfd6f9c960cf0d47f25af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/list_comment.html.twig"));

        $__internal_f72fc92e2042f2619ca7b89d81679d85e8f458bf4eb9f74ca8c002ab1b593c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72fc92e2042f2619ca7b89d81679d85e8f458bf4eb9f74ca8c002ab1b593c66->enter($__internal_f72fc92e2042f2619ca7b89d81679d85e8f458bf4eb9f74ca8c002ab1b593c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/list_comment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd534c70533439339b1533a03488204c2420e9fd2cdbfd6f9c960cf0d47f25af->leave($__internal_dd534c70533439339b1533a03488204c2420e9fd2cdbfd6f9c960cf0d47f25af_prof);

        
        $__internal_f72fc92e2042f2619ca7b89d81679d85e8f458bf4eb9f74ca8c002ab1b593c66->leave($__internal_f72fc92e2042f2619ca7b89d81679d85e8f458bf4eb9f74ca8c002ab1b593c66_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_545f4e5bb136e794a71b3dcea2cc3d7b5880d56ace72cd981703f2d67d45141d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545f4e5bb136e794a71b3dcea2cc3d7b5880d56ace72cd981703f2d67d45141d->enter($__internal_545f4e5bb136e794a71b3dcea2cc3d7b5880d56ace72cd981703f2d67d45141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f4a216683bc593c3169a8a63c68e9c437f6a0274d459884835065fda19a235f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4a216683bc593c3169a8a63c68e9c437f6a0274d459884835065fda19a235f->enter($__internal_5f4a216683bc593c3169a8a63c68e9c437f6a0274d459884835065fda19a235f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
        // line 13
        if (($context["comments"] ?? $this->getContext($context, "comments"))) {
            // line 14
            echo "                <table class=\"table table-hover table-bordered\">
                     <tr>
                         <th>#</th>
                         <th>Post Title</th>
                         <th>Firstname</th>
                         <th>Lastname</th>
                         <th>Content</th>
                         <th>Date</th>
                         <th>Action</th>
                     <tr>
                     ";
            // line 24
            $context["num"] = 0;
            // line 25
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 26
                echo "                         <tr>
                             ";
                // line 27
                $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
                // line 28
                echo "                             <td>";
                echo twig_escape_filter($this->env, ($context["num"] ?? $this->getContext($context, "num")), "html", null, true);
                echo "</td>
                             <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getPostTitle", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getFirstname", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getSurname", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getCommentContent", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "getCommentDate", array()), "format", array(0 => "M d, Y \\a\\t H : i A"), "method"), "html", null, true);
                echo "</td>
                             <td>
                                 <a class=\"btn btn-danger\" onclick='goto4(\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_comments", array("delete" => $this->getAttribute($context["comment"], "getCommentId", array()))), "html", null, true);
                echo "\")' id='delete_category'  href='#'>Delete</a>
                             </td>
                         </tr> 
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                 </table>
            ";
        } else {
            // line 41
            echo "                <h1 align=\"center\">No comments yet!.</h1>
            ";
        }
        // line 43
        echo "        </div>
    </div>   
";
        
        $__internal_5f4a216683bc593c3169a8a63c68e9c437f6a0274d459884835065fda19a235f->leave($__internal_5f4a216683bc593c3169a8a63c68e9c437f6a0274d459884835065fda19a235f_prof);

        
        $__internal_545f4e5bb136e794a71b3dcea2cc3d7b5880d56ace72cd981703f2d67d45141d->leave($__internal_545f4e5bb136e794a71b3dcea2cc3d7b5880d56ace72cd981703f2d67d45141d_prof);

    }

    public function getTemplateName()
    {
        return "admin/list_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 43,  130 => 41,  126 => 39,  116 => 35,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  90 => 28,  88 => 27,  85 => 26,  80 => 25,  78 => 24,  66 => 14,  64 => 13,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            {% if comments %}
                <table class=\"table table-hover table-bordered\">
                     <tr>
                         <th>#</th>
                         <th>Post Title</th>
                         <th>Firstname</th>
                         <th>Lastname</th>
                         <th>Content</th>
                         <th>Date</th>
                         <th>Action</th>
                     <tr>
                     {% set num = 0 %}
                     {% for comment in comments %}
                         <tr>
                             {% set num=num+1  %}
                             <td>{{ num }}</td>
                             <td>{{comment.getPostTitle}}</td>
                             <td>{{comment.getFirstname}}</td>
                             <td>{{comment.getSurname}}</td>
                             <td>{{comment.getCommentContent}}</td>
                             <td>{{comment.getCommentDate.format(\"M d, Y \\\\a\\\\t H : i A\")}}</td>
                             <td>
                                 <a class=\"btn btn-danger\" onclick='goto4(\"{{url(\"delete_comments\", {'delete': comment.getCommentId })}}\")' id='delete_category'  href='#'>Delete</a>
                             </td>
                         </tr> 
                     {% endfor %}
                 </table>
            {%else%}
                <h1 align=\"center\">No comments yet!.</h1>
            {% endif %}
        </div>
    </div>   
{% endblock %}
", "admin/list_comment.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\list_comment.html.twig");
    }
}
