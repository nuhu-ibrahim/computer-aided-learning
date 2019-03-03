<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ba06822b1766bfffa91cb6fc8a7f794b238212e7f6a95bda144f9bcb0c6685d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba06822b1766bfffa91cb6fc8a7f794b238212e7f6a95bda144f9bcb0c6685d8->enter($__internal_ba06822b1766bfffa91cb6fc8a7f794b238212e7f6a95bda144f9bcb0c6685d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ef8726872fc869c3dad1b0b42c7cc73e7335d6b0b6afbbf2f034dce1c2e62bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8726872fc869c3dad1b0b42c7cc73e7335d6b0b6afbbf2f034dce1c2e62bed->enter($__internal_ef8726872fc869c3dad1b0b42c7cc73e7335d6b0b6afbbf2f034dce1c2e62bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba06822b1766bfffa91cb6fc8a7f794b238212e7f6a95bda144f9bcb0c6685d8->leave($__internal_ba06822b1766bfffa91cb6fc8a7f794b238212e7f6a95bda144f9bcb0c6685d8_prof);

        
        $__internal_ef8726872fc869c3dad1b0b42c7cc73e7335d6b0b6afbbf2f034dce1c2e62bed->leave($__internal_ef8726872fc869c3dad1b0b42c7cc73e7335d6b0b6afbbf2f034dce1c2e62bed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_883e4a546e00d8fb220b2da8384607180d2a90f7314f9f36a5edb038fe090fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883e4a546e00d8fb220b2da8384607180d2a90f7314f9f36a5edb038fe090fc1->enter($__internal_883e4a546e00d8fb220b2da8384607180d2a90f7314f9f36a5edb038fe090fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19f22150158d8f303c05b9440aec125c5807457b3ee9c1ed2297125489affd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f22150158d8f303c05b9440aec125c5807457b3ee9c1ed2297125489affd7f->enter($__internal_19f22150158d8f303c05b9440aec125c5807457b3ee9c1ed2297125489affd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_19f22150158d8f303c05b9440aec125c5807457b3ee9c1ed2297125489affd7f->leave($__internal_19f22150158d8f303c05b9440aec125c5807457b3ee9c1ed2297125489affd7f_prof);

        
        $__internal_883e4a546e00d8fb220b2da8384607180d2a90f7314f9f36a5edb038fe090fc1->leave($__internal_883e4a546e00d8fb220b2da8384607180d2a90f7314f9f36a5edb038fe090fc1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b69e0e0ca2a438826f02a0c7877d6930b9ed2a8412cd661d78e41b2d877dfc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69e0e0ca2a438826f02a0c7877d6930b9ed2a8412cd661d78e41b2d877dfc55->enter($__internal_b69e0e0ca2a438826f02a0c7877d6930b9ed2a8412cd661d78e41b2d877dfc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0037197295331d577bc666f5e6902f34f5e8b167e2ed032ef61333e5ac3aee57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0037197295331d577bc666f5e6902f34f5e8b167e2ed032ef61333e5ac3aee57->enter($__internal_0037197295331d577bc666f5e6902f34f5e8b167e2ed032ef61333e5ac3aee57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0037197295331d577bc666f5e6902f34f5e8b167e2ed032ef61333e5ac3aee57->leave($__internal_0037197295331d577bc666f5e6902f34f5e8b167e2ed032ef61333e5ac3aee57_prof);

        
        $__internal_b69e0e0ca2a438826f02a0c7877d6930b9ed2a8412cd661d78e41b2d877dfc55->leave($__internal_b69e0e0ca2a438826f02a0c7877d6930b9ed2a8412cd661d78e41b2d877dfc55_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18a76755da5cf994983633338a90973311b2bd9f6c19ed37b8355c617c16617c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a76755da5cf994983633338a90973311b2bd9f6c19ed37b8355c617c16617c->enter($__internal_18a76755da5cf994983633338a90973311b2bd9f6c19ed37b8355c617c16617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52920337ff575979d55e46cbdd400e438856f0b5bef5653512cb1e80f9e3349b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52920337ff575979d55e46cbdd400e438856f0b5bef5653512cb1e80f9e3349b->enter($__internal_52920337ff575979d55e46cbdd400e438856f0b5bef5653512cb1e80f9e3349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_52920337ff575979d55e46cbdd400e438856f0b5bef5653512cb1e80f9e3349b->leave($__internal_52920337ff575979d55e46cbdd400e438856f0b5bef5653512cb1e80f9e3349b_prof);

        
        $__internal_18a76755da5cf994983633338a90973311b2bd9f6c19ed37b8355c617c16617c->leave($__internal_18a76755da5cf994983633338a90973311b2bd9f6c19ed37b8355c617c16617c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
