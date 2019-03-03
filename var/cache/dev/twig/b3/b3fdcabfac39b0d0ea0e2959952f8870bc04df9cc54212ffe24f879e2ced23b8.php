<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03b9d64410f6fb9200825bbdc1eb0b3a70c185339f1d3353db1671bc85cc54e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b9d64410f6fb9200825bbdc1eb0b3a70c185339f1d3353db1671bc85cc54e4->enter($__internal_03b9d64410f6fb9200825bbdc1eb0b3a70c185339f1d3353db1671bc85cc54e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b13f97dd5ab390d1164a5bad533c11ea4451efdd4bfa61feee6fb1da66edbdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13f97dd5ab390d1164a5bad533c11ea4451efdd4bfa61feee6fb1da66edbdd7->enter($__internal_b13f97dd5ab390d1164a5bad533c11ea4451efdd4bfa61feee6fb1da66edbdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_03b9d64410f6fb9200825bbdc1eb0b3a70c185339f1d3353db1671bc85cc54e4->leave($__internal_03b9d64410f6fb9200825bbdc1eb0b3a70c185339f1d3353db1671bc85cc54e4_prof);

        
        $__internal_b13f97dd5ab390d1164a5bad533c11ea4451efdd4bfa61feee6fb1da66edbdd7->leave($__internal_b13f97dd5ab390d1164a5bad533c11ea4451efdd4bfa61feee6fb1da66edbdd7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c924fa34854d3a45e4e444bc565f04f9d94e898c002f04bea2c62d65130ea89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c924fa34854d3a45e4e444bc565f04f9d94e898c002f04bea2c62d65130ea89b->enter($__internal_c924fa34854d3a45e4e444bc565f04f9d94e898c002f04bea2c62d65130ea89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11cd1fd7da68e8ec5bd8a1c222bb38c9ba02d58bd521d288a6cec74389842097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cd1fd7da68e8ec5bd8a1c222bb38c9ba02d58bd521d288a6cec74389842097->enter($__internal_11cd1fd7da68e8ec5bd8a1c222bb38c9ba02d58bd521d288a6cec74389842097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_11cd1fd7da68e8ec5bd8a1c222bb38c9ba02d58bd521d288a6cec74389842097->leave($__internal_11cd1fd7da68e8ec5bd8a1c222bb38c9ba02d58bd521d288a6cec74389842097_prof);

        
        $__internal_c924fa34854d3a45e4e444bc565f04f9d94e898c002f04bea2c62d65130ea89b->leave($__internal_c924fa34854d3a45e4e444bc565f04f9d94e898c002f04bea2c62d65130ea89b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ed5cb588e090e5eda93c4d15cf60cc90a2d112b30fef18cfba5c1f8438a0481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed5cb588e090e5eda93c4d15cf60cc90a2d112b30fef18cfba5c1f8438a0481->enter($__internal_7ed5cb588e090e5eda93c4d15cf60cc90a2d112b30fef18cfba5c1f8438a0481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a5e5f418e8dc30952b1522e45ab682153ec069a643a444a874ddf8e38b134d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5e5f418e8dc30952b1522e45ab682153ec069a643a444a874ddf8e38b134d0->enter($__internal_5a5e5f418e8dc30952b1522e45ab682153ec069a643a444a874ddf8e38b134d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5a5e5f418e8dc30952b1522e45ab682153ec069a643a444a874ddf8e38b134d0->leave($__internal_5a5e5f418e8dc30952b1522e45ab682153ec069a643a444a874ddf8e38b134d0_prof);

        
        $__internal_7ed5cb588e090e5eda93c4d15cf60cc90a2d112b30fef18cfba5c1f8438a0481->leave($__internal_7ed5cb588e090e5eda93c4d15cf60cc90a2d112b30fef18cfba5c1f8438a0481_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee0c9be74a6fa48953acf760aee3f6bb6e11d870d6440e481d18617996eaddbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0c9be74a6fa48953acf760aee3f6bb6e11d870d6440e481d18617996eaddbc->enter($__internal_ee0c9be74a6fa48953acf760aee3f6bb6e11d870d6440e481d18617996eaddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_295af8186cc4fffa546b5fc580decc1047f47fafba60982655be62f75b4d8a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295af8186cc4fffa546b5fc580decc1047f47fafba60982655be62f75b4d8a9c->enter($__internal_295af8186cc4fffa546b5fc580decc1047f47fafba60982655be62f75b4d8a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_295af8186cc4fffa546b5fc580decc1047f47fafba60982655be62f75b4d8a9c->leave($__internal_295af8186cc4fffa546b5fc580decc1047f47fafba60982655be62f75b4d8a9c_prof);

        
        $__internal_ee0c9be74a6fa48953acf760aee3f6bb6e11d870d6440e481d18617996eaddbc->leave($__internal_ee0c9be74a6fa48953acf760aee3f6bb6e11d870d6440e481d18617996eaddbc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
