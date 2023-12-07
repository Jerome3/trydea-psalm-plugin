/**
 * @psalm-template T
 *
 * @param array<array-key, T> $arr
 *
 * @return array<int, array<array-key, T>>
 */
function array_chunk(array $arr, int $size, bool $preserve_keys = false) {}
