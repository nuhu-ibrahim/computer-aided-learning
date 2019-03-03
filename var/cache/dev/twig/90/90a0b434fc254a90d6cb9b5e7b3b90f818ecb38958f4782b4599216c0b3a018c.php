<?php

/* admin/post_detail.html.twig */
class __TwigTemplate_b028a29bcc1374608e370d6a27d82cef2c62c05ac429e4bc67407ad39cc1b071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/post_detail.html.twig", 1);
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
        $__internal_02ae1b2cb4c0cd9b039337e275d714239b887fda3e6c50bfd2adb48b07997e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ae1b2cb4c0cd9b039337e275d714239b887fda3e6c50bfd2adb48b07997e4b->enter($__internal_02ae1b2cb4c0cd9b039337e275d714239b887fda3e6c50bfd2adb48b07997e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/post_detail.html.twig"));

        $__internal_ef727282988c5c7c984044c6bb3c8c7f6789a1137781fb3922d00afa1bd66294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef727282988c5c7c984044c6bb3c8c7f6789a1137781fb3922d00afa1bd66294->enter($__internal_ef727282988c5c7c984044c6bb3c8c7f6789a1137781fb3922d00afa1bd66294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/post_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ae1b2cb4c0cd9b039337e275d714239b887fda3e6c50bfd2adb48b07997e4b->leave($__internal_02ae1b2cb4c0cd9b039337e275d714239b887fda3e6c50bfd2adb48b07997e4b_prof);

        
        $__internal_ef727282988c5c7c984044c6bb3c8c7f6789a1137781fb3922d00afa1bd66294->leave($__internal_ef727282988c5c7c984044c6bb3c8c7f6789a1137781fb3922d00afa1bd66294_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d161d46a7b8a183a2308331ecbdefbbd0ae05b4f92b3d5ace61aedaa43bc1bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d161d46a7b8a183a2308331ecbdefbbd0ae05b4f92b3d5ace61aedaa43bc1bc2->enter($__internal_d161d46a7b8a183a2308331ecbdefbbd0ae05b4f92b3d5ace61aedaa43bc1bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76301cd12306f99a6de7421fd7e455213fb0ff36eca6ba60b79ebc6d66f4cc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76301cd12306f99a6de7421fd7e455213fb0ff36eca6ba60b79ebc6d66f4cc52->enter($__internal_76301cd12306f99a6de7421fd7e455213fb0ff36eca6ba60b79ebc6d66f4cc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col-md-12  table-responsive\" id=\"toPrint\"> 
            <h2>Post Full Detail</h2>
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <td colspan=\"2\"><p style=\"text-align:center;\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostImage", array())))), "html", null, true);
        echo "\" alt=\"Post Image\"/></p></td>
                </tr>
                <tr>
                     <th>Post Author</th>
                     <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostAuthor", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <th>Post Status</th>
                     <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostStatus", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <th>Category Title</th>
                     <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getCategoryTitle", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <th>Post Title</th>
                     <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostTitle", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <th>Post Description</th>
                     <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostDesc", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <th>Post Content</th>
                     <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "getPostContent", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <form class=\"form-inline\">
                            <button onclick=\"printDiv('toPrint')\" type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Print Property Deatails</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>   
";
        
        $__internal_76301cd12306f99a6de7421fd7e455213fb0ff36eca6ba60b79ebc6d66f4cc52->leave($__internal_76301cd12306f99a6de7421fd7e455213fb0ff36eca6ba60b79ebc6d66f4cc52_prof);

        
        $__internal_d161d46a7b8a183a2308331ecbdefbbd0ae05b4f92b3d5ace61aedaa43bc1bc2->leave($__internal_d161d46a7b8a183a2308331ecbdefbbd0ae05b4f92b3d5ace61aedaa43bc1bc2_prof);

    }

    public function getTemplateName()
    {
        return "admin/post_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  102 => 36,  95 => 32,  88 => 28,  81 => 24,  74 => 20,  67 => 16,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-md-12  table-responsive\" id=\"toPrint\"> 
            <h2>Post Full Detail</h2>
            <table class=\"table table-hover table-bordered\" >
                <tr>
                     <td colspan=\"2\"><p style=\"text-align:center;\"><img src=\"{{asset([\"uploads/\",post.getPostImage]|join)}}\" alt=\"Post Image\"/></p></td>
                </tr>
                <tr>
                     <th>Post Author</th>
                     <td>{{post.getPostAuthor}}</td>
                </tr>
                <tr>
                     <th>Post Status</th>
                     <td>{{post.getPostStatus}}</td>
                </tr>
                <tr>
                     <th>Category Title</th>
                     <td>{{post.getCategoryTitle}}</td>
                </tr>
                <tr>
                     <th>Post Title</th>
                     <td>{{post.getPostTitle}}</td>
                </tr>
                <tr>
                     <th>Post Description</th>
                     <td>{{post.getPostDesc}}</td>
                </tr>
                <tr>
                     <th>Post Content</th>
                     <td>{{post.getPostContent}}</td>
                </tr>
                <tr>
                    <td align=\"center\" colspan=\"2\">
                        <form class=\"form-inline\">
                            <button onclick=\"printDiv('toPrint')\" type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"><span style='visibility:hidden;'>ii</span></span>Print Property Deatails</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>   
{% endblock %}
", "admin/post_detail.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\post_detail.html.twig");
    }
}
