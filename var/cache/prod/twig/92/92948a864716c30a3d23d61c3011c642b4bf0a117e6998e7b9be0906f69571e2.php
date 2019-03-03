<?php

/* admin/add_attachment.html.twig */
class __TwigTemplate_a3da3b8715493985343edeea7332a9ca46eef6870e28925828db1e3d9f6d6cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/add_attachment.html.twig", 1);
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
            <h2>Add Attachment</h2>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
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
                <label for=\"exampleInputEmail1\">Post Title</label>
                ";
        // line 33
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_id", array()), 'errors')) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_id", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 38
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "post_id", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Post Attachment</label>
                ";
        // line 42
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment", array()), 'errors')) {
            // line 43
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment", array()), 'widget');
        echo "  
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Property Attachment Description</label>
                ";
        // line 51
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment_desc", array()), 'errors')) {
            // line 52
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment_desc", array()), 'errors');
            echo "
                    </div>
                ";
        }
        // line 56
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attachment_desc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "  
            </div>
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "update", array()), 'widget', array("attr" => array("style" => "visibility:hidden")));
        echo "
        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
        
        <div class=\"col-md-8\">
            ";
        // line 64
        if (($context["attachments"] ?? null)) {
            // line 65
            echo "                <table class=\"table table-striped\">
                    <tr>
                            <th>#</th>
                            <th>Post Title</th>
                            <th>Post Attachment</th>
                            <th>Post Attachment Desc</th>
                            <th>Action</th>
                    <tr>
                    ";
            // line 73
            $context["num"] = 0;
            // line 74
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attachments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 75
                echo "                    <tr>
                        ";
                // line 76
                $context["num"] = (($context["num"] ?? null) + 1);
                // line 77
                echo "                        <td>";
                echo twig_escape_filter($this->env, ($context["num"] ?? null), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getPostTitle", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getAttachment", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "getAttachmentDesc", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a class=\"btn btn-primary\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_attachment", array("edit" => $this->getAttribute($context["attach"], "getAttachmentId", array()))), "html", null, true);
                echo "\">Edit</a>
                            <a class=\"btn btn-danger\" onclick='goto2(\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("delete_attachment", array("delete" => $this->getAttribute($context["attach"], "getAttachmentId", array()))), "html", null, true);
                echo "\")' id='delete_attachment'  href='#'>Delete</a>
                        </td>
                    </tr>      
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                </table>
            ";
        } else {
            // line 89
            echo "                <h1 align=\"center\">No attachments yet!.</h1>
            ";
        }
        // line 91
        echo "        </div>
    </div>   
";
    }

    public function getTemplateName()
    {
        return "admin/add_attachment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 91,  229 => 89,  225 => 87,  215 => 83,  211 => 82,  206 => 80,  202 => 79,  198 => 78,  193 => 77,  191 => 76,  188 => 75,  183 => 74,  181 => 73,  171 => 65,  169 => 64,  162 => 60,  158 => 59,  154 => 58,  148 => 56,  142 => 53,  139 => 52,  137 => 51,  129 => 47,  123 => 44,  120 => 43,  118 => 42,  110 => 38,  104 => 35,  101 => 34,  99 => 33,  95 => 31,  92 => 30,  83 => 27,  80 => 26,  75 => 25,  73 => 24,  68 => 22,  65 => 21,  63 => 20,  58 => 19,  52 => 16,  49 => 15,  47 => 14,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/add_attachment.html.twig", "C:\\xampp\\htdocs\\others\\student_project\\computer_aided_learning\\app\\Resources\\views\\admin\\add_attachment.html.twig");
    }
}
