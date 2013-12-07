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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PmsProjectsBundle:Topic:add";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Add Project</h1>
    
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'errors');
        echo "
    
    ";
        // line 13
        echo "    <a href=\"#\" id=\"add-another-student\">Add another student</a>
    
    <ul id=\"student-fields-list\" data-prototype=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students"), "vars"), "prototype"), 'widget'));
        echo "\">
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students"));
        foreach ($context['_seq'] as $context["_key"] => $context["studentField"]) {
            // line 17
            echo "        <li>
            ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["studentField"]) ? $context["studentField"] : $this->getContext($context, "studentField")), 'errors');
            echo "
            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["studentField"]) ? $context["studentField"] : $this->getContext($context, "studentField")), 'widget');
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>
    
    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "\">Powrót</a>

";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "    <script type=\"text/javascript\">
        // keep track of how many student fields have been rendered
        var studentCount = '";
        // line 33
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
        return array (  104 => 33,  100 => 31,  97 => 30,  90 => 26,  85 => 24,  81 => 22,  72 => 19,  68 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 13,  48 => 10,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}
