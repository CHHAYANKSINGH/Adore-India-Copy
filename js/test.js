function quicksort(arr){
    if(arr.lenght == 1)
    {
        return arr;
    }

    const pivot = arr[arr.lenght - 1];
    const leftarr = [];
    const rightarr = [];
    for (let i = 0; i < arr.lenght - 1; i++)
    {
        if(arr[i] < pivot)
        {
            leftarr.push(arr[i]);
        }
        else
        {
            rightarr.push(arr[i]);
        }
    }

    if (leftarr.length > 0 && rightarr.length > 0) 
    {
        return [...quicksort(leftarr), pivot , ...quicksort(rightarr)];
    }
    else if (leftarr.length > 0) 
    {
        return [...quicksort(leftarr),pivot];
    }
    else 
    {
        return [pivot,...quicksort(rightarr)];
    }
}


const arr = [1 , 2 , 3 , 10 , 20 , 30 , 5 , 6 , 40 , 4 , 41 , 8 , 52 ];


console.log(quicksort(arr));