<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a1dfef49ced178fcd7e9b20802ae33ed2e9761120896d10fb98487532b2e7ce4 extends Twig_Template
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
        $__internal_a0727c8875cede5e066fc1e74de9df33f1045aa80fede5cbbd0efc4d278dd2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0727c8875cede5e066fc1e74de9df33f1045aa80fede5cbbd0efc4d278dd2fe->enter($__internal_a0727c8875cede5e066fc1e74de9df33f1045aa80fede5cbbd0efc4d278dd2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_09681b1a07ded06a0751415844df8d007e55a54c4a13d03b162809b717f32742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09681b1a07ded06a0751415844df8d007e55a54c4a13d03b162809b717f32742->enter($__internal_09681b1a07ded06a0751415844df8d007e55a54c4a13d03b162809b717f32742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a0727c8875cede5e066fc1e74de9df33f1045aa80fede5cbbd0efc4d278dd2fe->leave($__internal_a0727c8875cede5e066fc1e74de9df33f1045aa80fede5cbbd0efc4d278dd2fe_prof);

        
        $__internal_09681b1a07ded06a0751415844df8d007e55a54c4a13d03b162809b717f32742->leave($__internal_09681b1a07ded06a0751415844df8d007e55a54c4a13d03b162809b717f32742_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
