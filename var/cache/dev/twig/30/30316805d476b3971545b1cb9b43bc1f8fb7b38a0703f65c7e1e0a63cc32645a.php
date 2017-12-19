<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb70bc6eca82c333dfbd999d063010847510bbd37c5cacd51064d85a161254e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99fa7aabfc2affd91598739d2edc693abd1a0fafad939da320972343571fa36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fa7aabfc2affd91598739d2edc693abd1a0fafad939da320972343571fa36f->enter($__internal_99fa7aabfc2affd91598739d2edc693abd1a0fafad939da320972343571fa36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a388d8897f1cd9409bd75378a84d57fe836622c5261a19aad30d3665c6e59042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a388d8897f1cd9409bd75378a84d57fe836622c5261a19aad30d3665c6e59042->enter($__internal_a388d8897f1cd9409bd75378a84d57fe836622c5261a19aad30d3665c6e59042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_99fa7aabfc2affd91598739d2edc693abd1a0fafad939da320972343571fa36f->leave($__internal_99fa7aabfc2affd91598739d2edc693abd1a0fafad939da320972343571fa36f_prof);

        
        $__internal_a388d8897f1cd9409bd75378a84d57fe836622c5261a19aad30d3665c6e59042->leave($__internal_a388d8897f1cd9409bd75378a84d57fe836622c5261a19aad30d3665c6e59042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
