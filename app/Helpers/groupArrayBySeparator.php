<?php

if (!function_exists('groupArrayBySeparator')) {
    function groupArrayBySeparator(array $array, string $separator): array
    {
        try {
            if (empty($array) || !is_string($separator)) {
                throw new InvalidArgumentException('Invalid input: array must be non-empty and separator must be a string.');
            }
        } catch (InvalidArgumentException $e) {
            return ['error' => $e->getMessage()];
        }

        if ($separator === '') {
            return [$array]; // If separator is empty, return the whole array as a single group
        }

        if (!in_array($separator, $array)) {
            return [$array]; // If separator is not in the array, return the whole array as a single group
        }

        $result = [];
        $current = [];

        foreach ($array as $item) {
            if ($item === $separator) {
                if (!empty($current)) {
                    $result[] = $current;
                    $current = [];
                }
            } else {
                $current[] = $item;
            }
        }

        if (!empty($current)) {
            $result[] = $current;
        }

        return $result;
    }
}
