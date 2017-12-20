<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_99c783a1e9012162a0c4fab1dd51d7d7ee3e8495080c0ba8ba0f742f7f311aa6 extends Twig_Template
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
        $__internal_fa25ba75fea8f96513f8bb03595e2cb1923805ec16c908edadd85b1be6e04f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa25ba75fea8f96513f8bb03595e2cb1923805ec16c908edadd85b1be6e04f36->enter($__internal_fa25ba75fea8f96513f8bb03595e2cb1923805ec16c908edadd85b1be6e04f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2cd751ad2d96df8fef0aa252f053b2ffbb33d7436497a791f1de8be069bba381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd751ad2d96df8fef0aa252f053b2ffbb33d7436497a791f1de8be069bba381->enter($__internal_2cd751ad2d96df8fef0aa252f053b2ffbb33d7436497a791f1de8be069bba381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_fa25ba75fea8f96513f8bb03595e2cb1923805ec16c908edadd85b1be6e04f36->leave($__internal_fa25ba75fea8f96513f8bb03595e2cb1923805ec16c908edadd85b1be6e04f36_prof);

        
        $__internal_2cd751ad2d96df8fef0aa252f053b2ffbb33d7436497a791f1de8be069bba381->leave($__internal_2cd751ad2d96df8fef0aa252f053b2ffbb33d7436497a791f1de8be069bba381_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
