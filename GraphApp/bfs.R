library("igraph");
args <- commandArgs(TRUE);   
argument <- args[1]; 
N <- as.matrix(read.csv("matrix.csv",sep=";",header = FALSE),directed=TRUE);
g <- graph.adjacency(N, mode = "directed",weighted=TRUE);
res<-bfs(g, argument, neimode = c("total"),
    unreachable = FALSE,  order = TRUE,
    callback = NULL, extra = NULL, rho = parent.frame())
sink("bfs.txt");
print(res);
sink()
