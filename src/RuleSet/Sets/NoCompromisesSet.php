<?php

declare(strict_types=1);

namespace NoCompromises\PhpCsFixer\Config\RuleSet\Sets;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

class NoCompromisesSet extends AbstractRuleSetDescription
{
    public function getDescription(): string
    {
        return 'Rule set as used by No Compromises.';
    }

    public function getRules(): array
    {
        return [
            '@PhpCsFixer' => true,
            '@PhpCsFixer:risky' => true,

            // this is part of PhpCsFixer but something is overriding it later
            'single_line_empty_body' => true,

            // risky rules we don't like
            'native_function_invocation' => false,
            'ordered_traits' => false,

            // not ready to add these rules yet, but should be considered in the future
            'strict_comparison' => false,
            'strict_param' => false,

            // overrides to PhpCsFixer rules
            'concat_space' => [
                'spacing' => 'one', // default is 'none'
            ],
            'function_declaration' => [
                'closure_fn_spacing' => 'none', // default is 'one'
            ],
            'global_namespace_import' => [
                'import_classes' => true, // default is false
                'import_constants' => true, // default is false
                'import_functions' => true, // default is false
            ],
            'no_superfluous_phpdoc_tags' => [
                'allow_mixed' => false, // default is true
                'remove_inheritdoc' => true,
            ],
            'phpdoc_align' => [
                'align' => 'left', // default is 'vertical'
            ],
            'phpdoc_no_alias_tag' => [
                'replacements' => [
                    // @property-read removed from defaults
                    // @property-write removed from defaults
                    'type' => 'var',
                    'link' => 'see',
                ],
            ],

            // disable things from PhpCsFixer
            'combine_consecutive_unsets' => false,
            'escape_implicit_backslashes' => false,
            'increment_style' => false,
            'multiline_comment_opening_closing' => false,
            'multiline_whitespace_before_semicolons' => false,
            'ordered_class_elements' => false,
            'php_unit_internal_class' => false,
            'php_unit_test_class_requires_covers' => false,
            'phpdoc_separation' => false,
            'phpdoc_summary' => false,
            'phpdoc_to_comment' => false,
            'phpdoc_types_order' => false,
            'single_line_comment_style' => false,
            'single_quote' => false,
            'static_lambda' => false,
            'yoda_style' => false,

            // disable things from Symfony
            'single_line_throw' => false,

            // disable things from PSR12
            'single_trait_insert_per_statement' => false,

            // things customized from PSR12
            'new_with_parentheses' => [
                'anonymous_class' => false,
            ],
            'braces_position' => [
                'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
            ],
        ];
    }
}
