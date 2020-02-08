library("igraph");
args <- commandArgs(TRUE);   
argument <- args[1]; 
N <- as.matrix(read.csv("matrix.csv",sep=";",header = FALSE),directed=TRUE);
g <- graph.adjacency(N, mode = "directed",weighted=TRUE);
s.paths <- shortest.paths(g,1);
solid.epaths = get.shortest.paths(g, from = argument, to = V(g),output = 'epath');
sink("shortestpath.txt");
print(s.paths);
print(solid.epaths);
sink()