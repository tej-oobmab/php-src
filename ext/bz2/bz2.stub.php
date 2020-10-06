<?php

/** @generate-function-entries */

/**
 * @param string|resource $file
 * @return resource|false
 */
 function bzopen($file, string $mode) {}

/** @param resource $bz */
function bzread($bz, int $length = 1024): string|false {}

/**
 * @param resource $bz
 * @alias fwrite
 */
function bzwrite($bz, string $data, ?int $length = null): int|false {}

/**
 * @param resource $bz
 * @alias fflush
 */
function bzflush($bz): bool {}

/**
 * @param resource $bz
 * @alias fclose
 */
function bzclose($bz): bool {}

/** @param resource $bz */
function bzerrno($bz): int {}

/** @param resource $bz */
function bzerrstr($bz): string {}

/** @param resource $bz */
function bzerror($bz): array {}

function bzcompress(string $data, int $block_size = 4, int $work_factor = 0): string|int {}

function bzdecompress(string $data, int $use_less_memory = 0): string|int|false {}
