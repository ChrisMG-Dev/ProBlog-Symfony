<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_d88f46ba4858ed3d28a68c918cb4b6f65aaacf9a1c98e3d0d3f5dc30403eef06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("BloggerBlogBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if (isset($context["blogs"])) { $_blogs_ = $context["blogs"]; } else { $_blogs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blogs_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 6
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 7
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "created", array()), "c"), "html", null, true);
            echo "\">";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 9
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($_blog_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "title", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 12
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($_blog_, "image", array())))), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 14
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($_blog_, "id", array()))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: -</p>
                <p>Posted by <span class=\"highlight\">";
            // line 20
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "author", array()), "html", null, true);
            echo "</span> at ";
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blog_, "created", array()), "h:iA"), "html", null, true);
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 21
            if (isset($context["blog"])) { $_blog_ = $context["blog"]; } else { $_blog_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blog_, "tags", array()), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  96 => 21,  88 => 20,  79 => 15,  74 => 14,  68 => 12,  58 => 9,  49 => 7,  46 => 6,  39 => 5,  36 => 4,  11 => 2,);
    }
}
