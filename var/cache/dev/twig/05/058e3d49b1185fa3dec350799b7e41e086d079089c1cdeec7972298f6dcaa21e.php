<?php

/* admin/edit_post.html.twig */
class __TwigTemplate_71b6926df2d08895f0a260e59087238080b90f8f7feb28001c3dd72efc84dbb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/edit_post.html.twig", 1);
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
        $__internal_8d5a1590e7c5583c34ae23a549cbe36bb5fbcfd3a8e45ebc9985178c5db4f09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5a1590e7c5583c34ae23a549cbe36bb5fbcfd3a8e45ebc9985178c5db4f09a->enter($__internal_8d5a1590e7c5583c34ae23a549cbe36bb5fbcfd3a8e45ebc9985178c5db4f09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_post.html.twig"));

        $__internal_6d3cff445295a9c9a693436824bdd71f5dd1cf45665061759c6558a98bd724a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3cff445295a9c9a693436824bdd71f5dd1cf45665061759c6558a98bd724a9->enter($__internal_6d3cff445295a9c9a693436824bdd71f5dd1cf45665061759c6558a98bd724a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d5a1590e7c5583c34ae23a549cbe36bb5fbcfd3a8e45ebc9985178c5db4f09a->leave($__internal_8d5a1590e7c5583c34ae23a549cbe36bb5fbcfd3a8e45ebc9985178c5db4f09a_prof);

        
        $__internal_6d3cff445295a9c9a693436824bdd71f5dd1cf45665061759c6558a98bd724a9->leave($__internal_6d3cff445295a9c9a693436824bdd71f5dd1cf45665061759c6558a98bd724a9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dedb62512b73d7b89577c0113327ac6f7335aae3b7ff147ff0037154444458e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedb62512b73d7b89577c0113327ac6f7335aae3b7ff147ff0037154444458e8->enter($__internal_dedb62512b73d7b89577c0113327ac6f7335aae3b7ff147ff0037154444458e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26f80b5863ec3b9f611d110eb7a311012fe2d5f081b7fcddf2644f86d8558582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f80b5863ec3b9f611d110eb7a311012fe2d5f081b7fcddf2644f86d8558582->enter($__internal_26f80b5863ec3b9f611d110eb7a311012fe2d5f081b7fcddf2644f86d8558582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>Edit Post</h2>
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
                <label for=\"exampleInputEmail1\">Category Type</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_id", array()), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_id", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Title</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_title", array()), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_title", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Description</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_desc", array()), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_desc", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_desc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Image</label>
                ";
        // line 60
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_image", array()), 'errors')) {
            // line 61
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_image", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 65
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_image", array()), 'widget');
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Content</label>
                ";
        // line 69
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_content", array()), 'errors')) {
            // line 70
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_content", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Status</label>
                ";
        // line 78
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_status", array()), 'errors')) {
            // line 79
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 80
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_status", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 83
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "post_status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "update", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "  
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-8 table-responsive\">
            
            <form method='POST' action=''>
                    <div class=\"form-group\">
                        <label>Search Post Criteria</label>
                        <select name='search' class='form-control'>
                            <option value=''>--Select Criteria--</option>
                            <option value=''>All Posts</option>
                            <option value='published'>Published Posts</option>
                            <option value='draft'>Drafted Posts</option>
                        </select>
                    </div>
                    <input type=\"submit\" name=\"submit\" value=\"Search Post\" class='btn btn-primary'> 
            </form>
            <br>
            <h4>";
        // line 105
        echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
        echo "</h4>
           <table class=\"table table-hover table-bordered\">
                <tr>
                    <th>#</th>
                    <th>Category Title</th>
                    <th>Post Title</th>
                    <th>Post Image</th>
                    <th>Post Author</th>
                    <th>Post Status</th>
                    <th>Action</th>

                <tr>
                ";
        // line 117
        $context["num"] = 0;
        // line 118
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 119
            echo "                <tr>
                    ";
            // line 120
            $context["num"] = (($context["num"] ?? $this->getContext($context, "num")) + 1);
            // line 121
            echo "                    <td>";
            echo twig_escape_filter($this->env, ($context["num"] ?? $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                    <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getCategoryTitle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostTitle", array()), "html", null, true);
            echo "</td>
                    <td><img src='";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute($context["post"], "getPostImage", array())))), "html", null, true);
            echo "' class='img-responsive' height='200' width='200'></td>
                    <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostAuthor", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostStatus", array()), "html", null, true);
            echo "</td>
                    <td>
                            <a class=\"btn btn-primary\" href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_posts", array("edit" => $this->getAttribute($context["post"], "getPostId", array()))), "html", null, true);
            echo "\">Edit</a>
                            <a class=\"btn btn-primary\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("post_details", array("id" => $this->getAttribute($context["post"], "getPostId", array()))), "html", null, true);
            echo "\">Full Details</a>
                            <a class=\"btn btn-danger\" onclick='goto1(\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_posts", array("delete" => $this->getAttribute($context["post"], "getPostId", array()))), "html", null, true);
            echo "\")' href='#'>Delete</a>
                    </td>
                </tr> 
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                    
            </table>
        </div>
        </div>
    </div>   
";
        
        $__internal_26f80b5863ec3b9f611d110eb7a311012fe2d5f081b7fcddf2644f86d8558582->leave($__internal_26f80b5863ec3b9f611d110eb7a311012fe2d5f081b7fcddf2644f86d8558582_prof);

        
        $__internal_dedb62512b73d7b89577c0113327ac6f7335aae3b7ff147ff0037154444458e8->leave($__internal_dedb62512b73d7b89577c0113327ac6f7335aae3b7ff147ff0037154444458e8_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 135,  319 => 130,  315 => 129,  311 => 128,  306 => 126,  302 => 125,  298 => 124,  294 => 123,  290 => 122,  285 => 121,  283 => 120,  280 => 119,  275 => 118,  273 => 117,  258 => 105,  237 => 87,  233 => 86,  229 => 85,  223 => 83,  217 => 80,  214 => 79,  212 => 78,  204 => 74,  198 => 71,  195 => 70,  193 => 69,  185 => 65,  179 => 62,  176 => 61,  174 => 60,  166 => 56,  160 => 53,  157 => 52,  155 => 51,  147 => 47,  141 => 44,  138 => 43,  136 => 42,  128 => 38,  122 => 35,  119 => 34,  117 => 33,  113 => 31,  110 => 30,  101 => 27,  98 => 26,  93 => 25,  91 => 24,  86 => 22,  83 => 21,  81 => 20,  76 => 19,  70 => 16,  67 => 15,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <h2>Edit Post</h2>
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
                <label for=\"exampleInputEmail1\">Category Type</label>
                {% if form_errors(form.category_id) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.category_id) }}
                    </div>
                {% endif %}
                {{ form_widget(form.category_id, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Title</label>
                {% if form_errors(form.post_title) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.post_title) }}
                    </div>
                {% endif %}
                {{ form_widget(form.post_title, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Description</label>
                {% if form_errors(form.post_desc) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.post_desc) }}
                    </div>
                {% endif %}
                {{ form_widget(form.post_desc, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Image</label>
                {% if form_errors(form.post_image) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.post_image) }}
                    </div>
                {% endif %}
                {{ form_widget(form.post_image) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Content</label>
                {% if form_errors(form.post_content) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.post_content) }}
                    </div>
                {% endif %}
                {{ form_widget(form.post_content, {'attr': {'class': 'form-control'}}) }}  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Status</label>
                {% if form_errors(form.post_status) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form.post_status) }}
                    </div>
                {% endif %}
                {{ form_widget(form.post_status, {'attr': {'class': 'form-control'}}) }}  
            </div>
            {{ form_widget(form.update, {'attr': {'class': 'btn btn-primary'}}) }}  
            {{ form_widget(form.submit, {'attr': {'style' : 'visibility:hidden'}}) }}
        {{ form_end(form) }}
        </div>
        
        <div class=\"col-md-8 table-responsive\">
            
            <form method='POST' action=''>
                    <div class=\"form-group\">
                        <label>Search Post Criteria</label>
                        <select name='search' class='form-control'>
                            <option value=''>--Select Criteria--</option>
                            <option value=''>All Posts</option>
                            <option value='published'>Published Posts</option>
                            <option value='draft'>Drafted Posts</option>
                        </select>
                    </div>
                    <input type=\"submit\" name=\"submit\" value=\"Search Post\" class='btn btn-primary'> 
            </form>
            <br>
            <h4>{{search}}</h4>
           <table class=\"table table-hover table-bordered\">
                <tr>
                    <th>#</th>
                    <th>Category Title</th>
                    <th>Post Title</th>
                    <th>Post Image</th>
                    <th>Post Author</th>
                    <th>Post Status</th>
                    <th>Action</th>

                <tr>
                {% set num = 0 %}
                {% for post in posts %}
                <tr>
                    {% set num=num+1  %}
                    <td>{{ num }}</td>
                    <td>{{post.getCategoryTitle}}</td>
                    <td>{{post.getPostTitle}}</td>
                    <td><img src='{{asset([\"uploads/\",post.getPostImage]|join)}}' class='img-responsive' height='200' width='200'></td>
                    <td>{{post.getPostAuthor}}</td>
                    <td>{{post.getPostStatus}}</td>
                    <td>
                            <a class=\"btn btn-primary\" href=\"{{url(\"edit_posts\", {'edit': post.getPostId })}}\">Edit</a>
                            <a class=\"btn btn-primary\" href=\"{{url(\"post_details\", {'id': post.getPostId })}}\">Full Details</a>
                            <a class=\"btn btn-danger\" onclick='goto1(\"{{url(\"delete_posts\", {'delete': post.getPostId })}}\")' href='#'>Delete</a>
                    </td>
                </tr> 
                    
                {% endfor %}
                    
            </table>
        </div>
        </div>
    </div>   
{% endblock %}
", "admin/edit_post.html.twig", "C:\\xampp\\htdocs\\computer_aided_learning\\app\\Resources\\views\\admin\\edit_post.html.twig");
    }
}
