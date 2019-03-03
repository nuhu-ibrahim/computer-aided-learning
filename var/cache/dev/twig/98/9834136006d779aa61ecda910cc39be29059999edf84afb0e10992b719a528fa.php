<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c0c855fe752fa75a0e2a43fd080a577ef5152ecc104304a429eed0753ee3bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0c855fe752fa75a0e2a43fd080a577ef5152ecc104304a429eed0753ee3bd4->enter($__internal_4c0c855fe752fa75a0e2a43fd080a577ef5152ecc104304a429eed0753ee3bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_24e4affbccfeaf05d2a1b84ff051584453ad7cc34e1ff2164fa79fcf16ac73f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e4affbccfeaf05d2a1b84ff051584453ad7cc34e1ff2164fa79fcf16ac73f4->enter($__internal_24e4affbccfeaf05d2a1b84ff051584453ad7cc34e1ff2164fa79fcf16ac73f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0c855fe752fa75a0e2a43fd080a577ef5152ecc104304a429eed0753ee3bd4->leave($__internal_4c0c855fe752fa75a0e2a43fd080a577ef5152ecc104304a429eed0753ee3bd4_prof);

        
        $__internal_24e4affbccfeaf05d2a1b84ff051584453ad7cc34e1ff2164fa79fcf16ac73f4->leave($__internal_24e4affbccfeaf05d2a1b84ff051584453ad7cc34e1ff2164fa79fcf16ac73f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d927ffd56e031fac8af6a2108d9cb415d96d817d461b07e8627928318fa4aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d927ffd56e031fac8af6a2108d9cb415d96d817d461b07e8627928318fa4aa2->enter($__internal_5d927ffd56e031fac8af6a2108d9cb415d96d817d461b07e8627928318fa4aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_136e69792967de7f895c06d5bea3a1593af713a5c40b771c8dee9b90a74eda7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136e69792967de7f895c06d5bea3a1593af713a5c40b771c8dee9b90a74eda7d->enter($__internal_136e69792967de7f895c06d5bea3a1593af713a5c40b771c8dee9b90a74eda7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_136e69792967de7f895c06d5bea3a1593af713a5c40b771c8dee9b90a74eda7d->leave($__internal_136e69792967de7f895c06d5bea3a1593af713a5c40b771c8dee9b90a74eda7d_prof);

        
        $__internal_5d927ffd56e031fac8af6a2108d9cb415d96d817d461b07e8627928318fa4aa2->leave($__internal_5d927ffd56e031fac8af6a2108d9cb415d96d817d461b07e8627928318fa4aa2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fb05add16dd5c2d1704a287b7a802b8f7754835b74a7d3e20d485319137be8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb05add16dd5c2d1704a287b7a802b8f7754835b74a7d3e20d485319137be8d->enter($__internal_7fb05add16dd5c2d1704a287b7a802b8f7754835b74a7d3e20d485319137be8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c39677ded29a2fa582b7e42354dd89f5e4a12d8e5c3616039b9289f995af8d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39677ded29a2fa582b7e42354dd89f5e4a12d8e5c3616039b9289f995af8d40->enter($__internal_c39677ded29a2fa582b7e42354dd89f5e4a12d8e5c3616039b9289f995af8d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c39677ded29a2fa582b7e42354dd89f5e4a12d8e5c3616039b9289f995af8d40->leave($__internal_c39677ded29a2fa582b7e42354dd89f5e4a12d8e5c3616039b9289f995af8d40_prof);

        
        $__internal_7fb05add16dd5c2d1704a287b7a802b8f7754835b74a7d3e20d485319137be8d->leave($__internal_7fb05add16dd5c2d1704a287b7a802b8f7754835b74a7d3e20d485319137be8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2341847ec9996395865bd65d4619448bc19fd0a709111b76bdfa74b33e0d789f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2341847ec9996395865bd65d4619448bc19fd0a709111b76bdfa74b33e0d789f->enter($__internal_2341847ec9996395865bd65d4619448bc19fd0a709111b76bdfa74b33e0d789f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5c5b645b8aaabe81f5b008514637d51c05846480c829c7c085d3a4102c935dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c5b645b8aaabe81f5b008514637d51c05846480c829c7c085d3a4102c935dd->enter($__internal_f5c5b645b8aaabe81f5b008514637d51c05846480c829c7c085d3a4102c935dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5c5b645b8aaabe81f5b008514637d51c05846480c829c7c085d3a4102c935dd->leave($__internal_f5c5b645b8aaabe81f5b008514637d51c05846480c829c7c085d3a4102c935dd_prof);

        
        $__internal_2341847ec9996395865bd65d4619448bc19fd0a709111b76bdfa74b33e0d789f->leave($__internal_2341847ec9996395865bd65d4619448bc19fd0a709111b76bdfa74b33e0d789f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
