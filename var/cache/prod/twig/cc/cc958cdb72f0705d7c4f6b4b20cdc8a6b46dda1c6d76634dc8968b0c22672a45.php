<?php

/* admin/add_post.html.twig */
class __TwigTemplate_33a07a4f053724e2e19e679998918fe3252698d68fd771f170981d015a65135a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/add_post.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 6
        echo twig_escape_filter($this->env, ($context["page_header"] ?? null), "html", null, true);
        echo "
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\"> 
        <div class=\"col-md-4\"> 
            <h2>Add Post</h2>
            ";
        // line 14
        if (($context["create_msg"] ?? null)) {
            // line 15
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, ($context["create_msg"] ?? null), "html", null, true);
            echo "
                    </div>
            ";
        }
        // line 19
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("add_posts"))));
        echo "
            ";
        // line 20
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors')) {
            // line 21
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        } elseif (        // line 24
($context["errors"] ?? null)) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "category_id", array()), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "category_id", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "category_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Title</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_title", array()), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_title", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Description</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_desc", array()), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_desc", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_desc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Image</label>
                ";
        // line 60
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_image", array()), 'errors')) {
            // line 61
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_image", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 65
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_image", array()), 'widget');
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Content</label>
                ";
        // line 69
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_content", array()), 'errors')) {
            // line 70
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_content", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Status</label>
                ";
        // line 78
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_status", array()), 'errors')) {
            // line 79
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 80
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_status", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 83
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo " 
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "update", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
        
        <div class=\"col-md-8 table-responsive\">
            ";
        // line 91
        if (($context["posts"] ?? null)) {
            // line 92
            echo "                <form method='POST' action=''>
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
            echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
            echo " Posts</h4>
            
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
            // line 118
            $context["num"] = 0;
            // line 119
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 120
                echo "                         <tr>
                             ";
                // line 121
                $context["num"] = (($context["num"] ?? null) + 1);
                // line 122
                echo "                             <td>";
                echo twig_escape_filter($this->env, ($context["num"] ?? null), "html", null, true);
                echo "</td>
                             <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getCategoryTitle", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostTitle", array()), "html", null, true);
                echo "</td>
                             <td><img src='";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute($context["post"], "getPostImage", array())))), "html", null, true);
                echo "' class='img-responsive' height='200' width='200'></td>
                             <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostAuthor", array()), "html", null, true);
                echo "</td>
                             <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostStatus", array()), "html", null, true);
                echo "</td>
                             <td>
                                     <a class=\"btn btn-primary\" href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_posts", array("edit" => $this->getAttribute($context["post"], "getPostId", array()))), "html", null, true);
                echo "\">Edit</a>
                                     <a class=\"btn btn-primary\" href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("post_details", array("id" => $this->getAttribute($context["post"], "getPostId", array()))), "html", null, true);
                echo "\">Full Details</a>
                                     <a class=\"btn btn-danger\" onclick='goto1(\"";
                // line 131
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
            echo "                 </table>
            ";
        } else {
            // line 137
            echo "                <h1 align=\"center\">No ";
            echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
            echo " posts yet!.</h1>
            ";
        }
        // line 139
        echo "        </div>
    </div>   
";
    }

    public function getTemplateName()
    {
        return "admin/add_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 139,  319 => 137,  315 => 135,  305 => 131,  301 => 130,  297 => 129,  292 => 127,  288 => 126,  284 => 125,  280 => 124,  276 => 123,  271 => 122,  269 => 121,  266 => 120,  261 => 119,  259 => 118,  243 => 105,  228 => 92,  226 => 91,  219 => 87,  215 => 86,  211 => 85,  205 => 83,  199 => 80,  196 => 79,  194 => 78,  186 => 74,  180 => 71,  177 => 70,  175 => 69,  167 => 65,  161 => 62,  158 => 61,  156 => 60,  148 => 56,  142 => 53,  139 => 52,  137 => 51,  129 => 47,  123 => 44,  120 => 43,  118 => 42,  110 => 38,  104 => 35,  101 => 34,  99 => 33,  95 => 31,  92 => 30,  83 => 27,  80 => 26,  75 => 25,  73 => 24,  68 => 22,  65 => 21,  63 => 20,  58 => 19,  52 => 16,  49 => 15,  47 => 14,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/add_post.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\computer_aided_learning\\app\\Resources\\views\\admin\\add_post.html.twig");
    }
}
