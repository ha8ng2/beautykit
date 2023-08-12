# NOTE: Derived from blib\lib\Crypt\CAST5_PP.pm.
# Changes made here will be lost when autosplit is run again.
# See AutoSplit.pm.
package Crypt::CAST5_PP;

#line 126 "blib\lib\Crypt\CAST5_PP.pm (autosplit into blib\lib\auto\Crypt\CAST5_PP\init.al)"
sub init {
  use strict;
  use integer;
  my ($cast5, $key) = @_;
  croak "Key length must be 40 to 128 bits"
      if length($key) < 5 || length($key) > 16;
  require Crypt::CAST5_PP::Tables;

  # untaint the key. this keeps the evals from blowing up later.
  # arguably, a tainted key should result in tainted output. oh well.
  $key =~ /^(.*)$/s and $key = $1;

  # null-pad the key to 16 bytes, and then split it into 32-bit chunks
  my ($s, $t, $u, $v) = unpack "N4", pack "a16", $key;

  # compute the key schedule
  # don't try to read this -- it's generated by mkschedule
  my ($w, $x, $y, $z, @k);
  for (1..2) {
    $w=$s^$s5[$v>>16&255]^$s6[$v&255]^$s7[$v>>24&255]^$s8[$v>>8&255]^$s7[$u>>24&255];
    $x=$u^$s5[$w>>24&255]^$s6[$w>>8&255]^$s7[$w>>16&255]^$s8[$w&255]^$s8[$u>>8&255];
    $y=$v^$s5[$x&255]^$s6[$x>>8&255]^$s7[$x>>16&255]^$s8[$x>>24&255]^$s5[$u>>16&255];
    $z=$t^$s5[$y>>8&255]^$s6[$y>>16&255]^$s7[$y&255]^$s8[$y>>24&255]^$s6[$u&255];
    push@k,$s5[$y>>24&255]^$s6[$y>>16&255]^$s7[$x&255]^$s8[$x>>8&255]^$s5[$w>>8&255];
    push@k,$s5[$y>>8&255]^$s6[$y&255]^$s7[$x>>16&255]^$s8[$x>>24&255]^$s6[$x>>8&255];
    push@k,$s5[$z>>24&255]^$s6[$z>>16&255]^$s7[$w&255]^$s8[$w>>8&255]^$s7[$y>>16&255];
    push@k,$s5[$z>>8&255]^$s6[$z&255]^$s7[$w>>16&255]^$s8[$w>>24&255]^$s8[$z>>24&255];
    $s=$y^$s5[$x>>16&255]^$s6[$x&255]^$s7[$x>>24&255]^$s8[$x>>8&255]^$s7[$w>>24&255];
    $t=$w^$s5[$s>>24&255]^$s6[$s>>8&255]^$s7[$s>>16&255]^$s8[$s&255]^$s8[$w>>8&255];
    $u=$x^$s5[$t&255]^$s6[$t>>8&255]^$s7[$t>>16&255]^$s8[$t>>24&255]^$s5[$w>>16&255];
    $v=$z^$s5[$u>>8&255]^$s6[$u>>16&255]^$s7[$u&255]^$s8[$u>>24&255]^$s6[$w&255];
    push@k,$s5[$s&255]^$s6[$s>>8&255]^$s7[$v>>24&255]^$s8[$v>>16&255]^$s5[$u>>24&255];
    push@k,$s5[$s>>16&255]^$s6[$s>>24&255]^$s7[$v>>8&255]^$s8[$v&255]^$s6[$v>>16&255];
    push@k,$s5[$t&255]^$s6[$t>>8&255]^$s7[$u>>24&255]^$s8[$u>>16&255]^$s7[$s&255];
    push@k,$s5[$t>>16&255]^$s6[$t>>24&255]^$s7[$u>>8&255]^$s8[$u&255]^$s8[$t&255];
    $w=$s^$s5[$v>>16&255]^$s6[$v&255]^$s7[$v>>24&255]^$s8[$v>>8&255]^$s7[$u>>24&255];
    $x=$u^$s5[$w>>24&255]^$s6[$w>>8&255]^$s7[$w>>16&255]^$s8[$w&255]^$s8[$u>>8&255];
    $y=$v^$s5[$x&255]^$s6[$x>>8&255]^$s7[$x>>16&255]^$s8[$x>>24&255]^$s5[$u>>16&255];
    $z=$t^$s5[$y>>8&255]^$s6[$y>>16&255]^$s7[$y&255]^$s8[$y>>24&255]^$s6[$u&255];
    push@k,$s5[$w&255]^$s6[$w>>8&255]^$s7[$z>>24&255]^$s8[$z>>16&255]^$s5[$y>>16&255];
    push@k,$s5[$w>>16&255]^$s6[$w>>24&255]^$s7[$z>>8&255]^$s8[$z&255]^$s6[$z>>24&255];
    push@k,$s5[$x&255]^$s6[$x>>8&255]^$s7[$y>>24&255]^$s8[$y>>16&255]^$s7[$w>>8&255];
    push@k,$s5[$x>>16&255]^$s6[$x>>24&255]^$s7[$y>>8&255]^$s8[$y&255]^$s8[$x>>8&255];
    $s=$y^$s5[$x>>16&255]^$s6[$x&255]^$s7[$x>>24&255]^$s8[$x>>8&255]^$s7[$w>>24&255];
    $t=$w^$s5[$s>>24&255]^$s6[$s>>8&255]^$s7[$s>>16&255]^$s8[$s&255]^$s8[$w>>8&255];
    $u=$x^$s5[$t&255]^$s6[$t>>8&255]^$s7[$t>>16&255]^$s8[$t>>24&255]^$s5[$w>>16&255];
    $v=$z^$s5[$u>>8&255]^$s6[$u>>16&255]^$s7[$u&255]^$s8[$u>>24&255]^$s6[$w&255];
    push@k,$s5[$u>>24&255]^$s6[$u>>16&255]^$s7[$t&255]^$s8[$t>>8&255]^$s5[$s&255];
    push@k,$s5[$u>>8&255]^$s6[$u&255]^$s7[$t>>16&255]^$s8[$t>>24&255]^$s6[$t&255];
    push@k,$s5[$v>>24&255]^$s6[$v>>16&255]^$s7[$s&255]^$s8[$s>>8&255]^$s7[$u>>24&255];
    push@k,$s5[$v>>8&255]^$s6[$v&255]^$s7[$s>>16&255]^$s8[$s>>24&255]^$s8[$v>>16&255];
  }

  for (16..31) { $k[$_] &= 31 }
  delete $cast5->{encrypt};
  delete $cast5->{decrypt};
  $cast5->{rounds} = length($key) <= 10 ? 12 : 16;
  $cast5->{key} = \@k;
  return $cast5;
} # init

# end of Crypt::CAST5_PP::init
1;