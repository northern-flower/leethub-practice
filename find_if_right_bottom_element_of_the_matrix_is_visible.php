function isRightBottomElementVisitable(int $n, boolean $matrix[][]) {

  // edge case - check that $n>=1 and integer for example
  if ($n<1) return false;
  
  if ($n==1) {
	if ($matrix[0][0] == 0) return true;
	else return false;
  }
  
  // initialise hashmap visited 
  $hashmap_visited = new HashMap();
  
  for ($i=0; $i<$n; $i++) {
    for ($j=0; $j<$n; $j++)
      $hashmap_visited.put(($i,$j), 0);
  }
  
  $queue00 = [];
  $queue00.push(([0, 0]);
  
  $queueNN = [];
  $queueNN.push(([$n-1, $n-1]);
  
  // visit matrix (where 0 are), control if they are in hash table or not
  while ($queue00 != null && $queueNN != null) {
    
    $element00 = $queue.pop();	
	$elementNN = $queueNN.pop();
    
    // 0 1
    // 0 0
    
    $i00 = $element00[0];
    $j00 = $element00[1];
    
	$iNN = $elementNN[0];
    $jNN = $elementNN[1];
	
    $hashmap_visited.put(($i00,$j00), 1);
	$hashmap_visited.put(($iNN,$jNN), 1);
    
    if ($i00==$iNN && $j00==$jNN) return true;
    
	// down and right in queue00
    if (exists($matrix[$i][$j+1]) && ($matrix[$i][$j+1] == 0) && ($hashmap_visited.get(($i,$j+1))==0))
      $queue00.push(($i, $j+1));
    
	if (exists($matrix[$i-1][$j]) && ($matrix[$i-1][$j] == 0) && ($hashmap_visited.get(($i-1,$j))==0))
      $queue00.push(($i-1, $j));
    
	// up and left in queueNN
    if (exists($matrix[$i+1][$j]) && ($matrix[$i+1][$j] == 0) && ($hashmap_visited.get(($i+1,$j))==0))
      $queueNN.push(($i+1, $j));
    
    if (exists($matrix[$i][$j-1]) && ($matrix[$i][$j-1] == 0) && ($hashmap_visited.get(($i,$j-1))==0))
      $queueNN.push(($i, $j-1));
  
  }
  
  return false;
  
}
