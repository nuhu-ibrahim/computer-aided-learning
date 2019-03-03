<?php

/* admin/index.html.twig */
class __TwigTemplate_d4932ea13449db94d9c99cb0e3ba182b5fe25c320cbc498910735cfd0867ad8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/index.html.twig", 1);
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
        $__internal_9c3f8110a9e923027be1bbdc7bc3079d9b0b8942566b3a6b2ae4e1f5707d557b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3f8110a9e923027be1bbdc7bc3079d9b0b8942566b3a6b2ae4e1f5707d557b->enter($__internal_9c3f8110a9e923027be1bbdc7bc3079d9b0b8942566b3a6b2ae4e1f5707d557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_94b0c4f3f1e281959c45a507031a4e0315550dab3293fa859c6d29826abe2e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b0c4f3f1e281959c45a507031a4e0315550dab3293fa859c6d29826abe2e69->enter($__internal_94b0c4f3f1e281959c45a507031a4e0315550dab3293fa859c6d29826abe2e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3f8110a9e923027be1bbdc7bc3079d9b0b8942566b3a6b2ae4e1f5707d557b->leave($__internal_9c3f8110a9e923027be1bbdc7bc3079d9b0b8942566b3a6b2ae4e1f5707d557b_prof);

        
        $__internal_94b0c4f3f1e281959c45a507031a4e0315550dab3293fa859c6d29826abe2e69->leave($__internal_94b0c4f3f1e281959c45a507031a4e0315550dab3293fa859c6d29826abe2e69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2f2fcadcd318b866d50e4b22fdd98363a3487bbd63f60b0c1d6bf7eb34a966d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f2fcadcd318b866d50e4b22fdd98363a3487bbd63f60b0c1d6bf7eb34a966d->enter($__internal_c2f2fcadcd318b866d50e4b22fdd98363a3487bbd63f60b0c1d6bf7eb34a966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0aa051320eb1f387c71255ac1bfea92c46c69a29f971d771e04eea21b61a0736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa051320eb1f387c71255ac1bfea92c46c69a29f971d771e04eea21b61a0736->enter($__internal_0aa051320eb1f387c71255ac1bfea92c46c69a29f971d771e04eea21b61a0736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Dashboard <small>Statistics Overview</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"active\">
                    <i class=\"fa fa-dashboard\"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-comments fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">26</div>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-tasks fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-yellow\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-shopping-cart fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-support fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div> 
";
        
        $__internal_0aa051320eb1f387c71255ac1bfea92c46c69a29f971d771e04eea21b61a0736->leave($__internal_0aa051320eb1f387c71255ac1bfea92c46c69a29f971d771e04eea21b61a0736_prof);

        
        $__internal_c2f2fcadcd318b866d50e4b22fdd98363a3487bbd63f60b0c1d6bf7eb34a966d->leave($__internal_c2f2fcadcd318b866d50e4b22fdd98363a3487bbd63f60b0c1d6bf7eb34a966d_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
                Dashboard <small>Statistics Overview</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"active\">
                    <i class=\"fa fa-dashboard\"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-comments fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">26</div>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-tasks fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-yellow\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-shopping-cart fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-support fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div> 
{% endblock body %}", "admin/index.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
