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
        $__internal_17c699b8711755350681975ed1b5945b7d331f204695a42b60ad9d3dcb460d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c699b8711755350681975ed1b5945b7d331f204695a42b60ad9d3dcb460d80->enter($__internal_17c699b8711755350681975ed1b5945b7d331f204695a42b60ad9d3dcb460d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_381265d907138d8f516c6ab4598f7879f869c120fedbc893693ba42d725f4e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381265d907138d8f516c6ab4598f7879f869c120fedbc893693ba42d725f4e10->enter($__internal_381265d907138d8f516c6ab4598f7879f869c120fedbc893693ba42d725f4e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_17c699b8711755350681975ed1b5945b7d331f204695a42b60ad9d3dcb460d80->leave($__internal_17c699b8711755350681975ed1b5945b7d331f204695a42b60ad9d3dcb460d80_prof);

        
        $__internal_381265d907138d8f516c6ab4598f7879f869c120fedbc893693ba42d725f4e10->leave($__internal_381265d907138d8f516c6ab4598f7879f869c120fedbc893693ba42d725f4e10_prof);

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
