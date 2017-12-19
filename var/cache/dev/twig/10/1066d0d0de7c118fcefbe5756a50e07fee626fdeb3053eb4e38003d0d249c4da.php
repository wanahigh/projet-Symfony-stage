<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9561d4c3af7d2f9ffb32867bc3838c2562bf984be6e1bffc143f4a72c019916a extends Twig_Template
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
        $__internal_8c52390d3c091ebc3e4f874abba5a5c307618ea4670f0d791557c774966a8247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c52390d3c091ebc3e4f874abba5a5c307618ea4670f0d791557c774966a8247->enter($__internal_8c52390d3c091ebc3e4f874abba5a5c307618ea4670f0d791557c774966a8247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f8615710fd854683cbaa5074eaa39c766161a1edb7a48566d170ec8357f248d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8615710fd854683cbaa5074eaa39c766161a1edb7a48566d170ec8357f248d5->enter($__internal_f8615710fd854683cbaa5074eaa39c766161a1edb7a48566d170ec8357f248d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8c52390d3c091ebc3e4f874abba5a5c307618ea4670f0d791557c774966a8247->leave($__internal_8c52390d3c091ebc3e4f874abba5a5c307618ea4670f0d791557c774966a8247_prof);

        
        $__internal_f8615710fd854683cbaa5074eaa39c766161a1edb7a48566d170ec8357f248d5->leave($__internal_f8615710fd854683cbaa5074eaa39c766161a1edb7a48566d170ec8357f248d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
