library("igraph");
args <- commandArgs(TRUE); 
argument <- as.integer(args[1]);
argument1 <- as.integer(args[2]);
N <- as.matrix(read.csv("matrix.csv",sep=";",header = FALSE),directed=TRUE);
g <- graph.adjacency(N, mode = "directed",weighted=TRUE);
a <-sna::maxflow(N, argument, argument1, ignore.eval = FALSE)
sink("max_flow.txt");
print(a);
sink()