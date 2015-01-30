<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_290d3754b24d82483865b0630d438d7f22765899f8bf185bea3adc9ddd487554 extends Twig_Template
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
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>


";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "has", array(0 => "blogger-notice"), "method")) {
            // line 13
            echo "    ";
            $context["flashbag"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method");
            // line 14
            echo "    ";
            $context["message"] = $this->getAttribute($this->getContext($context, "flashbag"), 0, array(), "array");
            // line 15
            echo "     <div class=\"blogger-notice\">
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "
    </div>
";
        }
        // line 19
        echo "
    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'row');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'row');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "subject", array()), 'row');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "body", array()), 'row');
        echo "

        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  81 => 23,  75 => 22,  70 => 19,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
