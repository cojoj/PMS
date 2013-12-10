<?php

/* PmsProjectsBundle:Topic:add.html.twig */
class __TwigTemplate_a6dcaef02ba872a2ae5f7618743654b93b08e58863ce31bcf513cac72174a120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "PmsProjectsBundle:Topic:add";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <h1>Add Project</h1>
    
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'errors');
        echo "
    
    ";
        // line 16
        echo "    <a href=\"#\" id=\"add-another-student\" class=\"btn\">Add another student</a><br><br><hr>
    
    <ul id=\"student-fields-list\" data-prototype=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students"), "vars"), "prototype"), 'widget'));
        echo "\">
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students"));
        foreach ($context['_seq'] as $context["_key"] => $context["studentField"]) {
            // line 20
            echo "        <li>
            ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["studentField"]) ? $context["studentField"] : $this->getContext($context, "studentField")), 'errors');
            echo "
            ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["studentField"]) ? $context["studentField"] : $this->getContext($context, "studentField")), 'widget');
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
    
    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <br><hr><br><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "\" class=\"btn\">Powrót</a>

";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "    <script type=\"text/javascript\">
        // keep track of how many student fields have been rendered
        var studentCount = '";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students")), "html", null, true);
        echo "';
        
        jQuery(document).ready(function() {
            jQuery('#add-another-student').click(function() {
                if(studentCount < 3){
                var studentList = jQuery('#student-fields-list');

                // grab the prototype template
                var newWidget = studentList.attr('data-prototype');
                // replace the \"__name__\" used in the id and name of the prototype
                // with a number that's unique to your students
                // end name attribute looks like name=\"contact[students][2]\"
                newWidget = newWidget.replace(/__name__/g, studentCount);
                studentCount++;

                // create a new list element and add it to the list
                var newLi = jQuery('<li></li>').html(newWidget);
                newLi.appendTo(jQuery('#student-fields-list'));
            }
                return false;
            });
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "PmsProjectsBundle:Topic:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  101 => 35,  98 => 34,  91 => 29,  86 => 27,  82 => 25,  73 => 22,  69 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 16,  49 => 13,  44 => 11,  39 => 8,  36 => 7,  30 => 5,);
    }
}
